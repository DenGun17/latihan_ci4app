<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
	public function __construct()
	{
		$this->model= new \App\Models\User();
	}

	public function registrasi()
	{
		return view('registrasi');
	}

	public function login()
	{
		return view('login');
	}
}
