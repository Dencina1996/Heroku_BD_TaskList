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

Route::get('/', 'Controller@getTasks');
Route::post('/', 'Controller@insertTask');
Route::post('/done/{id}', 'Controller@updateTask');
Route::post('/delete/{id}', 'Controller@deleteTask');