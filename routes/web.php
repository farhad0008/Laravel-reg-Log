<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('registerView');
});

Route::post("/register", [UserController::class, 'register']);
// Route::view("/register");

Route::post("/login", [UserController::class, 'login']);
Route::view("/login", "loginView");

// Route::get("/profile", [UserController::class, 'profile']);
Route::view("/profile", 'profileView');

Route::get("/logout", [UserController::class, 'logout']);



// crud
Route::post("/insertData", [CrudController::class, 'insert']);
Route::view("/insertData", "insertView");

Route::get("/dispData", [CrudController::class, 'display']);

Route::post("/edit/{id}", [CrudController::class, 'update']);
Route::get("/edit/{id}", [CrudController::class, 'edit']);

Route::get("/delete/{id}", [CrudController::class, 'delete']);

Route::get("/search", [CrudController::class, 'search']);