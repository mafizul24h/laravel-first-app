<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/hello-c', [WelcomeController::class, 'sayHello']);
Route::get("/course", [WelcomeController::class, "courseName"]);
Route::get("/dashboard", [DashboardController::class, "dashboard"]);
Route::get("/sidebar", [DashboardController::class, "sidebar"]);
Route::get("/artical/{id?}", [ArticalController::class, "index"]);
Route::get("/artical/page/{pageNumber}", [ArticalController::class, "showArticels"]);
