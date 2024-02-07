<?php

use App\Http\Controllers\EssenceCultureController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\PlantingRateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UsersController::class,'list'] );

Route::get('/users/{id}',[UsersController::class,'view'] );

Route::put('/users/{id}',[UsersController::class,'update'] );

Route::post('/users',[UsersController::class,'create']);

Route::delete('/users/{id}',[UsersController::class,'delete'] );


Route::get('/region',[RegionController::class,'list'] );

Route::get('/region/{id}',[RegionController::class,'view'] );

Route::put('/region/{id}',[RegionController::class,'update'] );

Route::post('/region',[RegionController::class,'create']);

Route::delete('/region/{id}',[RegionController::class,'delete'] );


Route::get('/plantingRate',[PlantingRateController::class,'list'] );

Route::get('/plantingRate/{id}',[PlantingRateController::class,'view'] );

Route::put('/plantingRate/{id}',[PlantingRateController::class,'update'] );

Route::post('/plantingRate',[PlantingRateController::class,'create']);

Route::delete('/plantingRate/{id}',[PlantingRateController::class,'delete'] );


Route::get('/essenceCultureController',[EssenceCultureController::class,'list'] );

Route::get('/essenceCultureController/{id}',[EssenceCultureController::class,'view'] );

Route::put('/essenceCultureController/{id}',[EssenceCultureController::class,'update'] );

Route::post('/essenceCultureController',[EssenceCultureController::class,'create']);

Route::delete('/essenceCultureController/{id}',[EssenceCultureController::class,'delete'] );
