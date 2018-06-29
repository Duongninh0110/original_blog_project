<?php

namespace App\Http\Controllers;
use App\Post;

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
 
}





