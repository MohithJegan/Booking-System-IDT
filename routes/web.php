<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserDashboardController;

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Role-based Dashboard Redirect
Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user && $user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return redirect()->route('user.dashboard');
})->middleware(['auth'])->name('dashboard');

// User Dashboard
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('user.dashboard');

// Admin Dashboard 
Route::get('/admin/dashboard', function () {
    if (!session()->has('admin')) {
        return redirect('/login')->withErrors(['email' => 'Unauthorized access']);
    }
    return view('admin.dashboard');
})->name('admin.dashboard');

// Profile Management 
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Logout 
Route::post('/admin/logout', [AuthenticatedSessionController::class, 'adminLogout'])
    ->name('admin.logout');


require __DIR__.'/auth.php';
