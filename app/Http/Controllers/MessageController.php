<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; 
use Illuminate\Support\Facades\Log;
class MessageController extends Controller
{
    //
	public function index(Request $request) {
		$messages = Message::all(); 
	Log::info('Showing request details: '.$request);
	Log::info('Showing messages: '.$messages);
	 return view('messages')->with('messages', $messages); 
	}
}
