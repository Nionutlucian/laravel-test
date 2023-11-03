<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermissionDeniedController;
use App\Http\Controllers\ServicesController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logOut'])->name('logout');
Route::get('/login-simple', [LoginController::class, 'loginAsSimpleUser'])->name('login-simple');
Route::get('/login-admin', [LoginController::class, 'loginAsAdmin'])->name('login-admin');
Route::get('/permission-denied', [PermissionDeniedController::class, 'index'])->name('permission-denied');
Route::get('/services', [ServicesController::class, 'index'])->name('services')->middleware('auth.custom');
Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('auth.custom');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth.admin');
Route::get('/admin/edit', [AdminController::class, 'edit'])->name('page.edit')->middleware('auth.admin');
Route::patch('/admin/page', [AdminController::class, 'update'])->name('page.update')->middleware('auth.admin');
