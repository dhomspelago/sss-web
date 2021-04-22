<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\Backend\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{

    /**
     * Display the login view.
     *
     * @return View
     */
    public function create()
    {
        return view('backend.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::BACKEND_HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('backend')->logout();

        if (! Auth::guard('web')->check()) {
            $request->session()->invalidate();

            $request->session()->regenerateToken();
        }

        return redirect('backend/login');
    }
}
