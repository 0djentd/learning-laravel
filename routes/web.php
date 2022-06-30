<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return view('info');
});

const TasksController = 'App\Http\Controllers\TasksController';

Route::get('/api/tasks', TasksController.'@list');
Route::post('/api/tasks', TasksController.'@create');
Route::get('/api/tasks/{id}', TasksController.'@get');
Route::patch('/api/tasks/{id}', TasksController.'@update');
Route::delete('/api/tasks/{id}', TasksController.'@delete');
