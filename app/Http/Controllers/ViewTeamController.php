<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Team;
use App\User;

class ViewTeamController extends Controller
{

      public function index()
      {
        return view('teams.viewteams');
      }



    public function store()
    {

    }

}
