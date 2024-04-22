<?php

use App\Http\Controllers\MpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [MpController::class, 'hello']);
Route::get('/bye', [MpController::class, 'bye']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('user/store', [UserController::class, 'store']);
Route::get('/user/login', [UserController::class, 'login']);
Route::post('/user/login',[UserController::class, 'authenticate']);
Route::get('/user/list', [UserController::class, 'list']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);
Route::post('/user/update/{id}',[UserController::class, 'update']);