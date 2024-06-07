<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Authentification;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/bus', function () {
    return view('bus');
});
Route::get('/tram', function () {
    return view('tram');
});
Route::get('/trolleybus', function () {
    return view('trolleybus');
});
Route::get('/train', function () {
    return view('train');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});


Route::get('test/import', [App\Http\Controllers\GraphicController::class, 'index']);
Route::post('test/import', [App\Http\Controllers\GraphicController::class, 'importExcelData']);


Route::get('/Signin',[Authentification::class, 'signin'])->name('signin');
Route::post('/Signin',[Authentification::class, 'signinPost'])->name('signin.post');

Route::get('/Signup',[Authentification::class, 'signup'])->name('signup');
Route::post('/Signup',[Authentification::class, 'signupPost'])->name('signup.post');

Route::get('/logout', [Authentification::class, 'logout'])->name('logout');
