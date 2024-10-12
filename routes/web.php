<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
// import for userchntroller

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// direct route

Route::view('x','about');
// x for urls ,about is view name 
//  www.emon.com/x show about file

// Pass text 
Route::get('/contact/{name}', function ($name) {
    
    return view('contact',['name'=>$name]);
});

// Controller formate :

Route::get('user',[UserController::class,'getUser']);
Route::get('aboutuser',[UserController::class,'aboutuser']);
// pass string 
Route::get('getusername/{name}',[UserController::class,'getusername']);
// Show view via controller :
Route::get('showaboutview',[UserController::class,'showview']);