<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;



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


Route::get('/', [FrontendController::class, 'home'])->name('home1');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth_login'])->name('auth_login');

Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');

// Route::get('login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
// Route::get('login/github/callback', [LoginController::class, 'handleGithubCallback'])->name('handleGithubCallback');


Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'create_user'])->name('create_user');


Route::get('logout', [AuthController::class, 'logout'])->name('logout');
