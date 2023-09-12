<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Str;
class MainController extends Controller
{

    public function index()
    {
        return view('main.index');
    }

    public function cart()
    {
        return view('main.cart');
    }
    
    public function checkout()
    {
        return view('main.checkout');
    }

    public function shop()
    {
        return view('main.shop');
    }

    public function singlePage()
    {
        return view('main.singlePage');
    }

    public function ragister()
    {
        return view('main.register');
    }

    public function registerUser(Request $request)
    {
        $newUser = new User;
        $newUser = User::create( [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'user_type' => $request->user_type,
            'image' => $request->image
        ] );

        if ( !empty( $request->file( 'image' ) ) ) {
            $file = $request->file( 'image' );
            $randomStr = Str::random( 10 );
            $filename = $randomStr. '.'. $file->getClientOriginalExtension();
            $file->move( 'uploads/', $filename );
            $newUser->image = $filename;
        }

        $newUser->save();

        if($newUser->save()){
          return redirect('login')->with('success', 'your profile is ready');
        }
        return redirect()->back()->withInput();

    }
    public function login()
    {
        return view('main.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
					'email' => 'required',
					'password' => 'required',
				]);

				$credentials = $request->only('email', 'password');
				if(Auth::attempt($credentials)){
					return redirect()->intended('/')->with('success', 'you are successfully logged in');
				}

        return redirect('login')->with('error', 'Email/Password is incorrect');
    }

		public function logout()
		{
			Session::flush();
			Auth::logout();
			return redirect('login');
		}
}
