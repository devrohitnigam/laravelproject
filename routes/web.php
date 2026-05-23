<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');

Route::view('/services/web-design', 'services.web-design');
Route::view('/services/web-development', 'services.web-development');
Route::view('/services/seo', 'services.seo');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.single', compact('slug'));
});


use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // Default Dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');


    // Profile (Breeze default)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::view('/dashboard', 'admin.dashboard');

});

Route::post('/admin/users/{id}/role', [UserController::class, 'updateRole'])
    ->name('admin.users.role');

Route::get('/admin/users', [UserController::class, 'index'])
    ->middleware('auth')
    ->name('admin.users');


Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])
    ->name('admin.users.edit');

Route::post('/admin/users/{id}/update', [UserController::class, 'update'])
    ->name('admin.users.update');

// Create User
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');

// Delete User
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.delete');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
});

Route::get('/admin/blogs', function () {
    return "Blogs Page Coming Soon";
})->name('admin.blogs.index');

Route::get('/admin/services', function () {
    return "Services Page Coming Soon";
})->name('admin.services.index');



Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');

Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/store', [ServiceController::class, 'store'])->name('admin.services.store');

Route::get('/admin/services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
Route::post('/admin/services/{id}/update', [ServiceController::class, 'update'])->name('admin.services.update');

Route::delete('/admin/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.delete');

/*
|--------------------------------------------------------------------------
| Auth Routes (Do NOT remove)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';