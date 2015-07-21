<?php namespace App\Http\Controllers;
// use App\Page;
class HomeController extends Controller {
	public function getindex()
	{
		return view('home');
	}
}