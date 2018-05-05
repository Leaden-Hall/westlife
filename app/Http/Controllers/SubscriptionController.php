<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use Validator;

class SubscriptionController extends Controller
{

    public function index()
    {
        //
    }



    public function store(Request $request)
    {
      $subscription = new Subscription;
      $validator = Validator::make($request->all(), ['email' => 'email|required|unique:subscriptions'],
        ['unique' => 'You have already subscribed']);

      if ($validator->fails()) {
        return redirect('/')->withErrors($validator, 'err');
      }

      $subscription->email = $request->email;
      $subscription->save();

      return redirect()->back()->with('message', 'subscribed');

    }



    public function edit(Subscription $subscription)
    {
        //
    }


    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
