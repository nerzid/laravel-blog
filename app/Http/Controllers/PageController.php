<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{

	public function about()
	{
		$people = [
				'Eren YILDIZ', 'Görkem Özkendir', 'Enes Yıldız'
		];
		return view('pages.about', compact('people'));
	}

	public function contact()
	{
		return view('pages.contact');
	}


}
