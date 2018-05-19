<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\MakeContact;

class ContactController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:contacts',
        'url' => 'nullable|url',
        'message' => 'required'
      ]);

      $contactName = $request->name;
      $contactMessage = $request->message;

      \Mail::to($request->email)->send(new MakeContact($contactName, $contactMessage));

      Contact::create([
        'name' => $request->name,
        'email' =>$request->email,
        'url' => $request->url,
        'message' => $request->message
      ]);

      return redirect()->back()->with('message', 'contacted');
    }


    public function show(Contact $contact)
    {
        //
    }


    public function edit(Contact $contact)
    {
        //
    }


    public function update(Request $request, Contact $contact)
    {
        //
    }


    public function destroy(Contact $contact)
    {
        //
    }
}