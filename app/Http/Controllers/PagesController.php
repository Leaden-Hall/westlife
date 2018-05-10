<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;

class PagesController extends Controller {

//	public function getIndex() {
//		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
//		return view('pages.welcome')->withPosts($posts);
//	}

//	public function getAbout() {
//		$first = 'Alex';
//		$last = 'Curtis';
//
//		$fullname = $first . " " . $last;
//		$email = 'alex@jacurtis.com';
//		$data = [];
//		$data['email'] = $email;
//		$data['fullname'] = $fullname;
//		return view('pages.about')->withData($data);
//	}

	public function getContact() {
		return view('contact');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'name' => 'min:3',
			'message' => 'min:10']);

		$data = array(
			'email' => $request->email,
			'name' => $request->name,
			'bodyMessage' => $request->message
			);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('hello@maroon5.io');
			$message->subject($data['bodyMessage']);
		});

		Session::flash('success', 'Your Email was Sent!');

		return redirect('/');
	}

}