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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/createtournaments', 'TournamentController@index')->name('tournament.create')->middleware('auth');

Route::get('/admin', 'TournamentController@admin')->name('admin')->middleware('auth');


Route::post('/save', 'TournamentController@save')->name('tournament.save');
Route::get('/tournamentjoin/{id}', 'TournamentController@join')->name('tournament.join')->middleware('auth');
Route::post('/saveteam', 'TeamTournamentController@save')->name('team.save');
Route::get('/tournamentview/{id}', 'TournamentController@view')->name('tournament.view');
Route::get('/game/{id}', 'TournamentController@showtour')->name('game.tournament');
Route::get('/edit/{id}', 'TournamentController@edit')->name('tournament.edit');
Route::post('/update/{id}', 'TournamentController@update')->name('tournament.update');
Route::get('/delete/{id}', 'TournamentController@delete')->name('tournament.delete');

Route::get('/mytour', 'TournamentController@mytour')->name('my.tournament')->middleware('auth');


Route::post('/postsave', 'PostController@save')->name('post.save')->middleware('auth');
Route::get('/community', 'PostController@view')->name('post.view');


Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contactsave', 'ContactController@save')->name('save');
// Route::get('/contactview', 'ContactController@view')->name('contact.view');





Route::get('/creategames', 'GameController@index')->name('admin');
Route::get('/userview/{id}', 'GameController@view')->name('user.view');
Route::get('/usermakeadmin/{id}', 'GameController@makeAdmin')->name('user.makeadmin');
Route::get('/adminuserdelete/{id}', 'GameController@userdelete')->name('admin.userdelete');
Route::get('/admintournamentdelete/{id}', 'GameController@tournamentdelete')->name('admin.delete');
Route::get('/adminteamdelete/{id}', 'GameController@teamdelete')->name('admin.teamdelete');
Route::get('/viewteam/{id}', 'GameController@teamview')->name('team.view');


Route::post('/savegame', 'GameController@save')->name('game.save');
Route::get('/showgames', 'GameController@showgames')->name('games.show');















