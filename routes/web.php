<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\HrManagerController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AccountsManagerController;

// Helper function to handle redirection based on the user's role and status
if (!function_exists('redirectBasedOnRole')) {
    function redirectBasedOnRole($user) {
        // ✅ Check user status and show different messages
        if ($user->status !== 'active') {
            // Choose message based on status
            $message = match ($user->status) {
                'inactive'  => 'Your account is inactive. Please contact the administrator.',
                'suspended' => 'Your account has been suspended. Contact support for details.',
                'pending'   => 'Your account is pending approval. Please wait for confirmation.',
                default     => 'Your account status is invalid. Please contact support.',
            };

            // Log out and invalidate session
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();

            // Redirect back with status-specific error
            return redirect()->route('login.index')->withErrors(['email' => $message]);
        }

        // ✅ Redirect based on user role
        return match ($user->role) {
            'SuperAdmin'      => redirect()->route('superAdminDashboard'),
            'HRManager'       => redirect()->route('hrManagerDashboard'),
            'AccountsManager' => redirect()->route('accountsManagerDashboard'),
            'Admin'           => redirect()->route('adminDashboard'),
            default           => redirect()->route('staffDashboard'),
        };
    }
}

// Show login page or redirect if already logged in
Route::get('/', function () {
    if (Auth::check()) {
        return redirectBasedOnRole(Auth::user());  // Redirect based on role if logged in
    }
    return app(AuthenticatedSessionController::class)->create();  // Show login page if not logged in
})->name('login.index');

// Login page route
Route::get('/login', function () {
    if (Auth::check()) {
        return redirectBasedOnRole(Auth::user());  // Redirect based on role if logged in
    }
    return app(AuthenticatedSessionController::class)->create();  // Show login page if not logged in
})->name('login');

// Handle login POST request
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

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
         Route::patch('/profile/update', [SuperAdminController::class, 'updateProfile'])->name('superAdmin.profile.update');
        Route::get('/profile', [SuperAdminController::class, 'profile'])->name('profile');
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
