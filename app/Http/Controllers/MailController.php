<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testmail;

class MailController extends Controller
{
	public function send()
	{
		Mail::to('lamthanhhoai1990@gmail.com')->send(new Testmail());
		return 'Email was sent';
	}
}
