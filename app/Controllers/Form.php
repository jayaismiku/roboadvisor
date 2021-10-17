<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;
use App\Models\KelurahanModel;
use App\Models\KotaModel;
use App\Models\ProvinsiModel;
use App\Models\SpprModel;
use Geeklabs\Breadcrumbs\Breadcrumb;

class Form extends BaseController
{
	protected $spprModel, $provinsiModel, $kotaModel, $kelurahanModel, $kecamatanModel;

	public function __construct()
	{
		$this->breadcrumb = new Breadcrumb();
		$this->spprModel = new SpprModel();
		$this->provinsiModel = new ProvinsiModel();
		$this->kotaModel = new KotaModel();
		$this->kelurahanModel = new KelurahanModel();
		$this->kecamatanModel = new KecamatanModel();
	}

	public function index()
	{
		if (!$this->session->isLoggedIn) {
			return redirect()->to('login');
		}

		$this->breadcrumb->add('Home', '/');
		$this->breadcrumb->add('Form', '/form');

		$data = [
			'path' => $this->breadcrumb->render(),
			'web_title' => 'Form Surat Persetujuan Pembelian Rumah',
			'title_bar' => 'Form Surat Persetujuan Pembelian Rumah',
			'title_page' => 'Form Surat Persetujuan Pembelian Rumah',
			'provinsi' => $this->provinsiModel->where('status', 1)->findAll(),
			'kota' => $this->kotaModel->findAll(),
			'kecamatan' => $this->kecamatanModel->findAll(),
			'kelurahan' => $this->kelurahanModel->findAll(),
			'menu' => 'form'
		];

		return view('form/sppr', $data);
	}

	public function ajuan()
	{
		if (!$this->session->isLoggedIn) {
			return redirect()->to('login');
		}

		$this->breadcrumb->add('Home', '/');
		$this->breadcrumb->add('Form Ajuan', '/form/ajuan');

		// dd($this->session);

		$data = [
			'path' => $this->breadcrumb->render(),
			'web_title' => 'Form Ajuan Properti',
			'title_bar' => 'Form Ajuan Properti',
			'title_page' => 'Form Ajuan Properti',
			'provinsi' => $this->provinsiModel->where('status', 1)->findAll(),
			'kota' => $this->kotaModel->findAll(),
			'kecamatan' => $this->kecamatanModel->findAll(),
			'kelurahan' => $this->kelurahanModel->findAll(),
			'menu' => 'form'
		];

		return view('form/ajuan', $data);
	}

	public function simpan()
	{
	}
}
