<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        if (!auth()->user()) {
            return redirect()->route('login');
        }

        auth()->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('home');
    }
}
