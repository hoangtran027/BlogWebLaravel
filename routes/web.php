<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\HomePage;
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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard', [Controller::class]);
// })->middleware(['auth', 'verified']);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/dashboard', HomePageController::class);
    // Route::get('/dashboard');
});


Route::middleware('auth')->group(function () {
    // Route::resource('/dashboard', PostController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/post', PostController::class);

});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('/category', CategoryController::class)->names('category');

});


require __DIR__.'/auth.php';
