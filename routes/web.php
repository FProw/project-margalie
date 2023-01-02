<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'adminCheck'], function(){
  
  // Route::get('/logintest', [LoginController::class, 'login']);
  Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
  // Dashboard
  Route::get('/dashboard', [AdminController::class, 'dashboard']);
  //Anggota
  Route::get('/listanggota', [AnggotaController::class, 'list']);
  Route::get('/addanggota', [AnggotaController::class, 'create']);
  Route::post('/add', [AnggotaController::class, 'add']);
  Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit']);
  Route::put('/anggota/edit/{id}', [AnggotaController::class, 'update']);
  Route::get('/anggota/delete/{id}',[AnggotaController::class, 'delete']);
  Route::get('/deletedlist', [AnggotaController::class, 'deletelist']);
  Route::get('/anggota/restore/{id}', [AnggotaController::class, 'restore']);
  Route::get('/anggota/permadelete/{id}', [AnggotaController::class, 'permadelete']);
  //User
  Route::get('/listuser', [UserController::class, 'list']);
  Route::get('/adduser', [UserController::class, 'create']);
  Route::post('/adduser', [UserController::class, 'add']);
  Route::get('/user/edit/{id}', [UserController::class, 'edit']);
  Route::put('/user/edit/{id}', [UserController::class, 'update']);
  Route::get('/user/delete/{id}',[UserController::class, 'delete']);
  Route::get('/deleteduserlist', [UserController::class, 'deletelist']);
  Route::get('/user/restore/{id}', [UserController::class, 'restore']);
  Route::get('/user/permadelete/{id}', [UserController::class, 'permadelete']);
  //Edit
  Route::get('/edit/konfigurasi', [EditController::class, 'index']);
  //Blog
  Route::get('/listblog', [BlogController::class, 'list']);
  Route::get('/addblog', [BlogController::class, 'create']);
  Route::post('/addblog', [BlogController::class, 'add']);
  Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
  Route::put('/blog/edit/{id}', [BlogController::class, 'update']);
  Route::get('/blog/delete/{id}',[BlogController::class, 'delete']);
  Route::get('/deletedblog', [BlogController::class, 'deletelist']);
});

//Password Reset
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// Login
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'loginWeb']);

// Register
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'registerWeb']);

// Halaman
Route::get('/', [AppController::class, 'index']);
Route::get('/aboutus', [AppController::class, 'aboutus']);
Route::get('/berita', [AppController::class, 'berita']);

// Blog
Route::get('/blog/{blog}', [BlogController::class, 'index']);

//Video
Route::get('/video', [AppController::class, 'video']);