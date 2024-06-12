<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentification;
use App\Models\Route as ModelRoute; // Updated alias for ModelRoute
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;

Route::get('/', function () {
    $routes = ModelRoute::all();
    return view('home', ['routes' => $routes]);
})->name('home');

Route::get('/bus', function () {
    $routes = ModelRoute::where('route_id', 'LIKE', '%bus%')->get();
    return view('bus', ['routes' => $routes]);
});

Route::get('/tram', function () {
    $routes = ModelRoute::where('route_id', 'LIKE', '%tram%')->get();
    return view('tram',['routes' => $routes]);
});
Route::get('/trolleybus', function () {
    $routes = ModelRoute::where('route_id', 'LIKE', '%trol%')->get();
    return view('trolleybus', ['routes' => $routes]);
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
Route::get('/route/{route_id}', function ($route_id) {
    $route = ModelRoute::findOrFail($route_id);
    return view('route_details', compact('route'));
})->name('route.details');

Route::get('test/import', [App\Http\Controllers\GraphicController::class, 'index']);
Route::post('test/import', [App\Http\Controllers\GraphicController::class, 'importExcelData']);

Route::get('/Signin',[Authentification::class, 'signin'])->name('signin');
Route::post('/Signin',[Authentification::class, 'signinPost'])->name('signin.post');

Route::get('/Signup',[Authentification::class, 'signup'])->name('signup');
Route::post('/Signup',[Authentification::class, 'signupPost'])->name('signup.post');

Route::get('/logout', [Authentification::class, 'logout'])->name('logout');

Route::get('admin/dashboard', [HomeController::class, 'index']);


Route::post('/search-route', [RouteController::class, 'searchRoute'])->name('searchRoute');
Route::get('/route/{id}', [RouteController::class, 'show'])->name('route.show');
