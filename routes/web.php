<?php

use App\Http\Controllers\BloggerController;
use App\Http\Controllers\ChangeRoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoUploadController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuspendController;
use App\Http\Controllers\VerifyController;
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

//Main Blog Pages for all users and guest
Route::get("/",[PageController::class,"home"])->name("page.home");

Route::middleware("guest")->group(function(){

    //Login
    Route::controller(LoginController::class)->group(function(){
        Route::get("/login","login")->name("auth.login");
        Route::post("/login/check","check")->name("auth.login.check");
    });

    //Register
    Route::controller(RegisterController::class)->group(function(){
        Route::get("/register","register")->name("auth.register");
        Route::post("/register/store","store")->name("auth.register.store");
    });

});


Route::prefix("dashboard")->middleware("auth")->group(function(){
    // Pages
    Route::controller(PageController::class)->group(function(){
        Route::get("/","dashboard")->name("page.dashboard");
        Route::get("/profile","profile")->name("page.profile");
    });

    //For User List
    Route::controller(BloggerController::class)->group(function(){
        Route::get("/users","index")->name("users.index");
    });

    //To change user's role as an admin
    Route::post("/users/role",[ChangeRoleController::class,"changeRole"])->name("users.role");

    //active or ban user as an admin
    Route::controller(SuspendController::class)->group(function(){
        Route::get("/users/active/{id}","active")->name("users.active");
        Route::get("/users/ban/{id}","ban")->name("users.ban");
    });

    //To Verify account with verify_code
    Route::controller(VerifyController::class)->group(function(){
        Route::get("/verify","verify")->name("account.verify");
        Route::post("/verify","check")->name("verify.check");
    });

    // For Photo Upload
    Route::post("/photo",[PhotoUploadController::class,"upload"])->name("page.dashboard.photo");

    //For Logout
    Route::get("/logout",[LogoutController::class,"logout"])->name("page.dashboard.logout");
});
