<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
	}

	public function index()
	{
		if (!$this->session->isLoggedIn) {
			return redirect()->to('login');
		}

		$data = [
			// 'path' => $this->breadcrumb->render(),
			'web_title' => 'Dashboard Application'
		];

		return view('dashboard', $data);
	}
}
