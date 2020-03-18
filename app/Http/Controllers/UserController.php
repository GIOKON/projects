<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  //prompts edit page with the current authenticated user 
  public function edit(User $user)
  {
      $user = Auth::user();
      return view('users.edit', compact('user'));
  }
  // updates on edit click
  public function update(Request $request,User $user)
  {


    $this->validate($request, [
        'org_name' => 'required|string|max:255|unique:users,org_name,'.$user->id,
        'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        'username' => 'required|string|max:255|unique:users,username,'.$user->id,
        'password' => 'required|string|min:8',
        'country' => 'required|string|max:255',
        'org_type' => 'required|string|max:255',
        'depart' => 'required|string|max:255',
      ]);

            $user->org_name = $request->get('org_name');
             $user->email = $request->get('email');
             $user->username = $request->get('username');
             $user->password = bcrypt($request->get('password'));
             $user->country = $request->get('country');
             $user->org_type = $request->get('org_type');
             $user->depart = $request->get('depart');


            $user->save();

            return back();

        }



  }
