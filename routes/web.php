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

Route::post('/', [KidAppController::class, 'store']);  

Route::get('/child/show/{id}', [KidAppController::class, 'show']);

Route::post('child/edit/{id}', [KidAppController::class, 'edit']);

Route::get('child/create/{id}', [KidAppController::class, 'create']);




Route::get('/test', function(){

    $id = App\Models\Child::get('id');

    dd($id->toArray());

});