<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\MakeContact;
use App\Mail\ResponseContact;
class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin/contact')->with('contacts', $contacts);
    }

    public function responseForm($id)
    {
      $user = \Auth::user();
      $contact = Contact::find($id);
      return view('admin/contact_form', compact('user', 'contact'));
    }

    public function response(Request $request, Contact $contact)
    {
        $this->validate($request,[
          'response' => 'required',
          'sign' => 'required'
        ]);

      $contact->update(['status' => '1']);

      \Mail::to($contact->email)->send(new ResponseContact( $contact->message, $request->response, $request->sign));


        return redirect('admin/contact')->with('answered', 'Your response has been sent');
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
        'message' => $request->message,
        'status' => '0'
      ]);

      return redirect()->back()->with('message', 'contacted');
    }


    public function destroy(Contact $contact)
    {
      try {
        $contact->delete();
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin/contact', compact('contacts'))->with('deleteContact', 'Delete Contact Successfully');
      } catch (\Exception $e) {
        $e->getMessage();
      }
    }
}
