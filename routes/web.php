<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidAppController;

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

Route::get('child/edit/{id}', [KidAppController::class, 'edit']);

Route::post('/child/edit/{id}', [KidAppController::class, 'edit']);

Route::post('/child/update/{id}', [KidAppController::class, 'update']);

Route::get('child/create/{id}', [KidAppController::class, 'create']);

Route::get('/child/delete/{id}', [KidAppController::class, 'destroy']);




Route::get('/test', function(){

    $contents = App\Models\Content::first();
  
    ddd($contents);
});