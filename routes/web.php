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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

$controller = function () { return view ('Welcome'); };

Route::get('/',$controller);

Route::get('/agenda', "Agenda@index");

Route::get('/agenda/add', "Agenda@add");
Route::post('/agenda/add', "Agenda@add");

Route::get('/agenda/detail/{task_id}', "Agenda@detail");

Route::get('agenda/edit/{task_id}', "Agenda@edit");
Route::post('agenda/edit/{task_id}', "Agenda@edit");

Route::post('agenda/delete', "Agenda@delete");


Route::get('/media',"MediaController@index");
Route::get('/media/upload',"MediaController@upload");
Route::post('/media/upload',"MediaController@upload");
