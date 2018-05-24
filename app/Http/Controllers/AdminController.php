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


    public function welcome(Request $request) {
      if(Auth::check() && Auth()->user()->admin()) {
          $admin = Auth::user();
          $request->session()->put('admin', $admin);
          return view('admin/home');
      }

      return view('admin/login');

    }


    public function login(Request $request) {
      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {

        if(Auth()->user()->admin()) {

          if(Auth()->user()->isVerified()) {
            $admin = Auth::user();
            $request->session()->put('admin', $admin);
            return redirect('/admin/home');

          }
          $this->logout($request);
          return redirect('/admin/')->with('adminFailLogin', 'You need to verify your email');
        }
        $this->logout($request);
        return redirect('/admin/')->with('adminFailLogin', 'You are not administrator');
      }
      return redirect('/admin/')->with('adminFailLogin', 'Please check your credentials and try again');
    }


    public function home() {
      return view('/admin/home');
    }


    public function logout(Request $request) {
      $request->session()->forget('admin');
      Auth::logout();

      return redirect('/admin');
    }


}
