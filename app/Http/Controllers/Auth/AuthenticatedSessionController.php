<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
 public function store(LoginRequest $request): RedirectResponse
{
    // Authenticate the user
    $request->authenticate();

    // Regenerate session to prevent session fixation
    $request->session()->regenerate();

    $user = $request->user();

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
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect back with status-specific error
        return back()->withErrors(['email' => $message]);
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



    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
