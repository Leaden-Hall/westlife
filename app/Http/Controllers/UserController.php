<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $user = Auth::user();

    return view('account/myAccount', compact('user'));
  }

  public function password() {
    return view('auth/passwords/reset', compact('user'));
  }

  public function email() {
    return view('account/email', compact('user'));
  }


  public function updateEmail(Request $request)
  {
    $errors = new MessageBag();

    if (Hash::check($request->password, Auth::user()->password) == false) {
      $errors->add('confirmPassword', 'Your password does not match');
      return view('account/email')->withErrors($errors);
    }

    $this->validate($request, ['email' => 'required|email|unique:users']);

    $user = User::find(Auth::user()->id);
    $user->email = $request->email;
    $user->save();

    return redirect('/account')->with('message', 'Your email has been changed!');

  }

  public function updatePassword(Request $request)
  {
    $errors = new MessageBag();

    if (Hash::check($request->oldPassword, Auth::user()->password) == false) {
      $errors->add('oldPassword', 'Your password does not match');
      return view('auth/passwords/reset')->withErrors($errors);
    }

    $this->validate($request, ['password' => 'required|string|min:6|confirmed']);

    $user = User::find(Auth::user()->id);
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect('/account')->with('message', 'Your password has been changed!');

  }

  public function destroy($id)
  {
      //
  }
}
