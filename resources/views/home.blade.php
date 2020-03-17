@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"style="text-align:center;font-size:20px;">Teams</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <div class=col-md-12>
                    <a class="pl-5" style="font-size:25px;"href="createteams">Create a Team</a>
                      <a class="pl-5"style="font-size:25px;"href="viewteams">View Teams</a>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
