<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Geeklabs\Breadcrumbs\Breadcrumb;

class Payment extends BaseController
{

	public function __construct()
	{
		// $this->breadcrumb = new Breadcrumb;
	}

	public function index()
	{
		// if (!$this->session->isLoggedIn) {
		// 	return redirect()->to('login');
		// }

		// $this->breadcrumb->add('Home', '/');
		// $this->breadcrumb->add('Payments', '/payment');

		$data = [
			// 'path' => $this->breadcrumb->render(),
			'web_title' => 'Halaman Pembayaran',
			'title_bar' => 'Halaman Pembayaran',
			'title_page' => 'Daftar Pembayaran Saya',
			'menu' => 'payment'
		];

		return view('payment', $data);
	}

	public function create()
	{
		if (!$this->session->isLoggedIn) {
			return redirect()->to('login');
		}

		$data = [
			'web_title' => 'Tambah Bukti Pembayaran',
			'title_bar' => 'Tambah Bukti Pembayaran',
			'title_page' => 'Tambah Bukti Pembayaran',
			'menu' => 'payment'
		];

		return view('form/tambah-bukti', $data);
	}

	public function save()
	{
		if (!$this->validate([
			'file_bukti' => [
				'rules' => '',
				'error' => [
					'required' => ''
				]
			]
		])) {
		}
	}
}
