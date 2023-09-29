<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/login","login")->name("auth.login");
    Route::post("/login/check","check")->name("auth.login.check");
});

Route::controller(RegisterController::class)->group(function(){
    Route::get("/register","register")->name("auth.register");
    Route::post("/register/store","store")->name("auth.register.store");
});

Route::get("/",[PageController::class,"home"])->name("page.home");
