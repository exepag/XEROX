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


Route::get('/', "AgendaController@index");

Route::get('/agenda/detail/{agenda_id}', "AgendaController@detail");

Route::get('/agenda/add', "AgendaController@add");
Route::post('/agenda/add', "AgendaController@add");


Route::get('agenda/edit/{agenda_id}', "AgendaController@edit");
Route::post('agenda/edit/{agenda_id}', "AgendaController@edit");

Route::post('agenda/delete', "AgendaController@delete");


Route::get('/media',"MediaController@index");
Route::get('/media/upload',"MediaController@upload");
Route::post('/media/upload',"MediaController@upload");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
