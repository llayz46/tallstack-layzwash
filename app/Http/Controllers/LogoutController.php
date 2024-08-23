<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('home');
    }
}
