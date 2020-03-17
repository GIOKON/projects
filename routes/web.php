<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/viewteams','ViewTeamController@index')->name('view');
Route::post('/viewteams','ViewTeamController@store');

Route::get('/createteams','CreateTeamController@index');
Route::post('/createteams','CreateTeamController@store') ;

Route::get('/accountedit',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);





Route::get('/home', 'HomeController@index')->name('home');
