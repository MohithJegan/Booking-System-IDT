<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Show login form.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle login request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt login from users table (single source of truth)
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Store admin in session manually if needed
            if ($user->role === 'admin') {
                session(['admin' => $user]);
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('user.dashboard');
        }

        // Failed
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    /**
     * Logout (shared for both admin & user).
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->forget('admin');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Admin logout shortcut route.
     */
    public function adminLogout(Request $request): RedirectResponse
    {
        return $this->destroy($request); // reuse logout logic
    }
}
