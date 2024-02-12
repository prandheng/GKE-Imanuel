<?php

// use App\Models\Post;
// use App\Models\User;

use App\Models\Category;
use App\Models\Jemaat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardJemaatController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardRenunganController;
use App\Http\Controllers\DashboardIndexController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\RenunganController;
use App\Http\Controllers\BaptisController;
use App\Http\Controllers\NikahController;
use App\Http\Controllers\SidiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
        'image' => 'logo.jpg',
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/renungans', [RenunganController::class, 'index']);
Route::get('/renungans/{renungan:slug}', [RenunganController::class, 'show']);
Route::resource('/jemaat', JemaatController::class);
Route::get('/galleries', [GalleryController::class, 'index']);

Route::get('/form', [BaptisController::class, 'index']);
// Route::get('/formulir/nikah', [NikahController::class, 'index']);
// Route::get('/formulir/sidi', [SidiController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// autentikasi
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

// route untuk buat slug otomatis
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth'); 
Route::get('/dashboard/categories/SlugMaker', [AdminCategoryController::class, 'SlugMaker'])->middleware('auth');
Route::get('/dashboard/renungan/autoSlug', [DashboardRenunganController::class, 'autoSlug'])->middleware('auth');


// Dashboard Routes
// Route::resource('/dashboard', DashboardIndexController::class)->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/jemaat', DashboardJemaatController::class)->middleware('auth');
Route::resource('/dashboard/galleries', DashboardGalleryController::class)->middleware('auth');
Route::resource('/dashboard/renungan', DashboardRenunganController::class)->middleware('auth');