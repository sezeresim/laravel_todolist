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

Route::get('/', function () {return view('welcome');});
Route::get('/todos', ['as' => 'todos', 'uses' => 'TodosController@index']);

Route::get('/todo/delete/{id}',['as' => 'todo.delete', 'uses' => 'TodosController@delete']);
Route::get('/todo/update/{id}',['as' => 'todo.update', 'uses' => 'TodosController@update']);
Route::post('/todo/save/{id}',['as' => 'todos.save', 'uses' => 'TodosController@save']);
Route::post('/create/todo','TodosController@store');

Route::get('/todos/completed/{id}',[
    'uses'=>'TodosController@completed',
    'as'=>'todos.completed'
]);