<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UsersController::class,'list'] );

Route::get('/users/{id}',[UsersController::class,'view'] );

Route::put('/users/{id}',[UsersController::class,'update'] );

Route::post('/users',[UsersController::class,'create']);

Route::delete('/users/{id}',[UsersController::class,'delete'] );
