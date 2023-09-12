<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $user_type = Auth()->user()->user_type;

            if($user_type == 'user')
            {
                return view('dashboard');

            }elseif($user_type == 'admin')
            {
                return view('admin.adminhome');
            }
        }else{
            return redirect()->back();
        }
    }

    public function post()
    {
        return view('post');
    }
}
