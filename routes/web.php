<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

require __DIR__.'/auth.php';


Route::middleware(['auth', 'user-role:tech'])->group(function () {
    Route::get('/', function () {
        return view('dashboard', ['msg' => 'User role']);
    })->name('user');
    // Route::resource('user', UserController::class);
});
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard', ['msg' => 'Admin role']);
    })->name('admin');
    // Route::resource('user', UserController::class);
});


// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    