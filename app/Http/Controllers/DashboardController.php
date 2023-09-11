<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        //return view('dashboard');

        // $user = auth()->user();
        // return view('dashboard', compact('user'));

        return view('dashboard', ['user' => auth()->user()]);
    }
}
