<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use Validator;
use App\Mail\Subscribe;

class SubscriptionController extends Controller
{

    public function index()
    {
        $subs = Subscription::all();
        return view('admin/subscription')->with('subs', $subs);
    }



    public function store(Request $request)
    {
      $subscription = new Subscription;
      $validator = Validator::make($request->all(), ['email' => 'email|required|unique:subscriptions'],
        ['unique' => 'You have already subscribed']);

      if ($validator->fails()) {
        return redirect('/')->withErrors($validator, 'err');
      }

      \Mail::to($request->email)->send(new Subscribe());

      $subscription->email = $request->email;
      $subscription->save();

      return redirect()->back()->with('message', 'subscribed');

    }

    public function destroy($id)
    {
        Subscription::find($id)->delete();
        return redirect('admin/subscription');
    }
}
