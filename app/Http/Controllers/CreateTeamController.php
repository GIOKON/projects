<?php

namespace App\Http\Controllers;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CreateTeamController extends Controller
{
  public function index(Request $request)
  {

    $fName = DB::table('users')->select('org_name', 'id')->get();
    return view('teams.createteams',compact('fName'));

  }

  public function store(Request $request)
  {

    $user=auth()->user();
    $team=Team::create($request->all());
    $user->teams()->attach($team);
    if($request->get('org_select')) {
    foreach($request->get('org_select') as $org) {
      $user = User::find($org);

      Mail::send('mail.notice',['user' => $user],
                        function ($message)
                        use ($user) {
                            $message->subject(auth()->user()->org_name." has invited you to Website A");
                            $message->to($user->email, $user->org_name);
                        }
                    );
      \DB::table('team_user')->insert(['users_id' => $org, 'teams_id' => $team->id]);
    }
  }
    return redirect('viewteams');

  }

}
