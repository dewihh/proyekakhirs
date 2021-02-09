<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function register()
	{
		return view('register');
	}
	public function read()
	{
		return view('read_tag');
	}
	public function read_tag_id()
	{
		return view('read_tag_user');
	}
}
