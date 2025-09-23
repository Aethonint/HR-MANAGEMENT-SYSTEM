<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\HrManagerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AccountsManagerController;

Route::get('/', function () {
    return redirect()->route('login');
});
// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth'])->group(function () {
    // Super Admin Routes
    Route::middleware(['role:SuperAdmin'])->prefix('super-admin')->group(function () {
        Route::get('/dashboard', [SuperAdminController::class, 'superAdminDashboard'])->name('superAdminDashboard');
        Route::get('/manage-users', [SuperAdminController::class, 'manageUsers'])->name('manageUsers');
        // Add more SuperAdmin-specific routes here
    });

    // HR Manager Routes
    Route::middleware(['role:HRManager'])->prefix('hr-manager')->group(function () {
        Route::get('/dashboard', [HrManagerController::class, 'hrManagerDashboard'])->name('hrManagerDashboard');
        Route::get('/manage-employees', [HrManagerController::class, 'manageEmployees'])->name('manageEmployees');
        // Add more HR Manager-specific routes here
    });

    // Accounts Manager Routes
    Route::middleware(['role:AccountsManager'])->prefix('accounts-manager')->group(function () {
        Route::get('/dashboard', [AccountsManagerController::class, 'accountsManagerDashboard'])->name('accountsManagerDashboard');
        Route::get('/view-financials', [AccountsManagerController::class, 'viewFinancials'])->name('viewFinancials');
        // Add more Accounts Manager-specific routes here
    });

    // Admin Routes
    Route::middleware(['role:Admin'])->prefix('admins')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
        Route::get('/settings', [AdminController::class, 'adminSettings'])->name('adminSettings');
        // Add more Admin-specific routes here
    });

    // Staff Routes
    Route::middleware(['role:Staff'])->prefix('staff')->group(function () {
        Route::get('/dashboard', [StaffController::class, 'staffDashboard'])->name('staffDashboard');
        Route::get('/my-tasks', [StaffController::class, 'staffTasks'])->name('staffTasks');
        // Add more Staff-specific routes here
    });
});
































require __DIR__.'/auth.php';
