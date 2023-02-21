<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\GalleryController;
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
  //gallery
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
  Route::get('/blog/restore/{id}', [BlogController::class, 'restore']);
  Route::get('/blog/permadelete/{id}', [BlogController::class, 'permadelete']);
  //Video
  Route::get('/videos', [VideoController::class, 'index'] );
  Route::get('/addvideos', [VideoController::class, 'create']);
  Route::post('/addVideos', [VideoController::class, 'store']);
  Route::get('/videos/edit/{video}', [VideoController::class, 'edit']);
  Route::put('/videos/{video}', [VideoController::class, 'update']);
  Route::get('/videos/delete/{video}', [VideoController::class, 'destroy']);
  //Gallery
  Route::get('/listgallery', [GalleryController::class, 'list']);
  Route::get('/addgallery', [GalleryController::class, 'create']);
  Route::post('/addGallery', [GalleryController::class, 'add']);
  Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit']);
  Route::put('/gallery/edit/{id}', [GalleryController::class, 'update']);
  Route::get('/gallery/delete/{id}',[GalleryController::class, 'delete']);
  Route::get('/deletedgallery', [GalleryController::class, 'deletelist']);
  Route::get('/gallery/restore/{id}', [GalleryController::class, 'restore']);
  Route::get('/gallery/permadelete/{id}', [GalleryController::class, 'permadelete']);
  //Actor
  Route::get('/listactor', [ActorController::class, 'list']);
  Route::get('/addactor', [ActorController::class, 'create']);
  Route::post('/addActor', [ActorController::class, 'add']);
  Route::get('/actor/edit/{id}', [ActorController::class, 'edit']);
  Route::put('/actor/edit/{id}', [ActorController::class, 'update']);
  Route::get('/actor/delete/{id}',[ActorController::class, 'delete']);
  Route::get('/deletedactor', [ActorController::class, 'deletelist']);
  Route::get('/actor/restore/{id}', [ActorController::class, 'restore']);
  Route::get('/actor/permadelete/{id}', [ActorController::class, 'permadelete']);
  //Slider
  Route::get('/listslider', [SliderController::class, 'list']);
  Route::get('/addslider', [SliderController::class, 'create']);
  Route::post('/addSlider', [SliderController::class, 'add']);
  Route::get('/slider/edit/{id}', [SliderController::class, 'edit']);
  Route::put('/slider/edit/{id}', [SliderController::class, 'update']);
  Route::get('/slider/delete/{id}',[SliderController::class, 'delete']);
  Route::get('/deletedslider', [SliderController::class, 'deletelist']);
  Route::get('/slider/restore/{id}', [SliderController::class, 'restore']);
  Route::get('/slider/permadelete/{id}', [SliderController::class, 'permadelete']);
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
Route::get('/addData', [AppController::class, 'addBerita'])->name('load.loadData');
Route::get('/organisation', [AppController::class, 'organisation']);

// Blog
Route::get('/blog/{blog}', [BlogController::class, 'index']);

//Video
Route::get('/video', [AppController::class, 'video']);