<?php

use App\Http\Controllers\CrudController;
use App\Models\Crud;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/create', function () {
    return view('create');
});

Route::get('/',[App\Http\Controllers\CrudController::class,'index']);
Route::post('/store',[App\Http\Controllers\CrudController::class,'store']);
Route::get('/edit/{crud}',[App\Http\Controllers\CrudController::class,'edit']);
Route::put('/update/{id}',[App\Http\Controllers\CrudController::class,'update']);
Route::get('/show/{crud}',[App\Http\Controllers\CrudController::class,'show']);
Route::delete('/delete/{id}',[App\Http\Controllers\CrudController::class,'destroy']);

