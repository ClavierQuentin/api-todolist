<?php

use App\Http\Controllers\TodosController;
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


Route::get('api/todo', [TodosController::class, 'list']);
Route::post('api/todo',[TodosController::class, 'saveTodo']);
Route::put('api/todo/done/{id}', [TodosController::class, 'markAsDone']);
Route::delete('api/todo/delete/{id}',[TodosController::class, 'deleteTodo']);
