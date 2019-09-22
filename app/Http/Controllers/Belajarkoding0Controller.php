<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mail\Belajarkoding0Email;
use Illuminate\Support\Facades\Mail;

class Belajarkoding0Controller extends Controller
{
	public function index()
	{

		Mail::to("testing@belajarkoding0.com")->send(new Belajarkoding0Email());

		return "Email telah dikirim";
	}
}
