<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', ['as' => 'root', 'uses' => 'TasksController@index']);

Route::get('/tasks/new', ['as' => 'new', 'uses' => 'TasksController@new_task']);
Route::post('/tasks', ['as' => 'create', 'uses' => 'TasksController@create']);

Route::put('/tasks/{id}/change_status', ['as' => 'change_status', 'uses' => 'TasksController@change_status']);

Route::delete('/tasks/{id}/', ['as' => 'delete', 'uses' => 'TasksController@destroy']);