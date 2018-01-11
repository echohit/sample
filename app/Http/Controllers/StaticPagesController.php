<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
	{
		return view('static_pages.home');
	}

	public function help()
	{
		return 'help';
	}

	public function about()
	{
		return 'about';
	}

	public function contract()
	{
		return 'contract us';
	}
}
