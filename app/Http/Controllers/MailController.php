<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testmail;

class MailController extends Controller
{
	public function send(Request $request)
	{
		$request->validate([
			'email' => 'required',
			'template' => 'required'
		]);

		$template = $request->template;

		Mail::to($request->email)->send(new Testmail($template));
		return redirect(route('welcome'))->with('messenger', 'Email was send');
	}
}
