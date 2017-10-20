<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Component; 
use Illuminate\Support\Facades\Log;

class ComponentController extends Controller
{
    //
	public function index(Request $request) {
		$components = Component::all(); 
	Log::info('Showing request details: '.$request);
	Log::info('Showing messages: '.$components);
	 return view('components')->with('components', $components); 
	}

}
