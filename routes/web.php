<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidAppController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [KidAppController::class, 'index']);

Route::post('/child/create/{id}', [KidAppController::class, 'store']);  

Route::get('/child/show/{id}', [KidAppController::class, 'show']);

Route::get('child/edit/artwork/anecdote/{id}', [KidAppController::class, 'edit']);

Route::post('/child/edit/artwork/anecdote/{id}', [KidAppController::class, 'edit']);

Route::post('/child/update/{id}', [KidAppController::class, 'update']);

Route::get('child/create/{id}', [KidAppController::class, 'create']);

Route::get('/child/delete/{id}', [KidAppController::class, 'destroy']);

Route::get('/user/register', [KidAppController::class, 'register']);

Route::post('/user/register',[KidAppController::class, 'store_register']);

Route::get('/user/login', [KidAppController::class, 'login']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/test', function (){

    
  
});