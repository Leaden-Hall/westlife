<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('admin')->except(['welcome', 'login']);
    }

    public function welcome() {
      if(Auth::check()) {
        return view('admin/home');
      }

      return view('admin/login');
    }

    public function login(Request $request) {

      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {

        if(Auth()->user()->admin()) {

          if(Auth()->user()->isVerified()) {

            $request->session()->regenerate();
            return $this->home();

          }
          $this->logout();
          return redirect('/admin/')->with('adminFailLogin', 'You need to verify your email');
        }
        $this->logout();
        return redirect('/admin/')->with('adminFailLogin', 'You are not administrator');
      }
      return redirect('/admin/')->with('adminFailLogin', 'Please check your credentials and try again');
    }


    public function home() {
      $admin = Auth::user();
      return view('/admin/home', compact('admin'));
    }

    public function logout() {
      Auth::logout();

      return redirect('/admin');
    }
}
