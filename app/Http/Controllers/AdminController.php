<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function welcome() {
      return view('admin/login');
    }

    public function login(Request $request) {

      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {
        if(Auth()->user()->UserRole->Roles->first()->title == 'administrator') {
          return redirect('/admin/home');
        }

        $this->logout();
        return redirect('/admin/')->with('adminFailLogin', 'You are not administrator');

      }

      return redirect('/admin/')->with('adminFailLogin', 'Please check your credentials and try again');
    }

    public function logout() {
      Auth::logout();

      return redirect('/admin');
    }
}
