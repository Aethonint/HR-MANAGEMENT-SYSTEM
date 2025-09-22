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
        $request->authenticate();

        $request->session()->regenerate();

       // Authenticate the user
    $request->authenticate();

    // Regenerate session to prevent session fixation
    $request->session()->regenerate();

    // Check the authenticated user's role and redirect accordingly
    $user = $request->user();

    if ($user->role == 'SuperAdmin') {
        return redirect()->route('superAdminDashboard');
    } elseif ($user->role == 'HRManager') {
        return redirect()->route('hrManagerDashboard');
    } elseif ($user->role == 'AccountsManager') {
        return redirect()->route('accountsManagerDashboard');
    } elseif ($user->role == 'Admin') {
        return redirect()->route('adminDashboard');
    } else {
        return redirect()->route('staffDashboard');
    }
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
