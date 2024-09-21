<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/test', function(){
    return 'success';
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
