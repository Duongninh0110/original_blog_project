<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Mail;
use Session;

class PagesController extends Controller {

	public function getIndex() {

		$posts=Post::orderby('Created_at', 'desc')->limit(4)->get();
		return view ('Pages.welcome')->withPosts($posts);
	}
	public function getAbout() {
		$Fist="Ninh";
		$Last="Duong";
		$Fullname=$Fist."".$Last;
		$Email="Duongninh0110@gmail.com";
		$Data=[];
		$Data['Fullname']=$Fullname;
		$Data['Email']=$Email;
		return view ('Pages.about')->withData($Data);

	}
	public function getContact() {
	return view ('Pages.contact');
	}
 	
 	public function postContact(Request $request) {

 		$this->validate($request, array(
 			'email'=>'required|email',
 			'subject'=>'min:3',
 			'message' =>'min:10'
 		));

 		$data=array(

 		'email'=>$request->email,
 		'Subject'=>$request->Subject,
 		'bodyMessage'=>$request->Message,
 		'survey'=>['Q1'=>'hello', 'Q2'=>'Yes']
 		);

 		Mail::send('emails.contact', $data, function($message) use ($data){

 			$message -> from ($data['email']);
 			$message -> to('Dn1@gmail.com');
 			$message -> subject($data['Subject']);


 		});

 		Session::flash('success', 'your email has been sent succesfully');
 		return redirect('/');
	
	}
}





