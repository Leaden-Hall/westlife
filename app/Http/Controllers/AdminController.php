<?php

namespace App\Http\Controllers;

use Doctrine\Common\Lexer\AbstractLexer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Role;
use App\Permission;
use App\Album;
use App\Blog;
use App\Subscription;
use App\Song;
use App\Contact;

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
          return $this->home();
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
      $users = User::all();
      $roles = Role::all();
      $permissions = Permission::all();
      $albums = Album::all();
      $blogs = Blog::all();
      $subscriptions = Subscription::all();
      $contacts = Contact::all();
      $songs = Song::all();


      return view('/admin/home', compact('users', 'roles', 'permissions',
                                              'albums', 'blogs', 'subscriptions', 'contacts',
                                                'songs'));
    }


    public function logout(Request $request) {
      $request->session()->forget('admin');
      Auth::logout();

      return redirect('/admin');
    }


}
