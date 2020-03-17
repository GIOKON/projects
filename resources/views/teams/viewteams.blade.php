@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 style="text-align:center;">Your Teams</h2></div>


                <div class="card-body">
                  @foreach (auth()->user()->teams as $team)
                  <h3>Team Name</h3>
                  {{$team->team_name}} <br>
                  <h4>Description</h4>
                  {{$team->desc}}<br>
                  <h3>Orgs</h3>
                  @foreach ($team->users as $org)
                    {{$org->org_name}}
                  @endforeach

                  @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
