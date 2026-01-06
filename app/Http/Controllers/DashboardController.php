<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the main dashboard for authenticated users.
     */
    public function index()
    {
        return view('dashboard', [
            'user' => Auth::user(),
        ]);
    }
}
