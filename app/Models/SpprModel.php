<?php

namespace App\Models;

use CodeIgniter\Model;

class SpprModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'sppr';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['form_id', 'id_pembeli', 'nama_pembeli', 'alamat_ktp', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'alamat_domisili', 'telp_1', 'telp_2', 'status_nikah', 'pekerjaan', 'nama_perumahan', 'lokasi', 'blok', 'tipe', 'luas_tanah', 'luas_bangunan', 'metode_pembelian', 'harga_jual_standar', 'uang_muka_standar', 'diskon', 'biaya_tambahan', 'kelebihan_tanah', 'total_harga_jual', 'uang_muka', 'total_cicilan', 'cicilan_per_bulan', 'sisa_hutang', 'dibayar', 'kewajiban_per_bulan', 'file_ktp', 'created_at', 'updated_at'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'nama_pembeli' =>	'required',
		'alamat_ktp' =>	'required',
		'provinsi' =>	'required',
		'kota' =>	'required',
		'kecamatan' =>	'required',
		'kelurahan' =>	'required',
		'telp_1' =>	'required',
		'status_nikah' =>	'required',
		'pekerjaan' =>	'required',
		'nama_perumahan' =>	'required',
		'blok' =>	'required',
		'tipe' =>	'required',
		'file_ktp' =>	'required',
		'file_kk' =>	'required',
	];
	protected $validationMessages   = [
		'nama_pembeli' =>	[
			'required' => 'Nama Pembeli wajib diisi',
		],
		'alamat_ktp' =>	[
			'required' => 'Alamat sesuai KTP wajib diisi'
		],
		'provinsi' =>	[
			'required' => 'Provinsi wajib dipilih'
		],
		'kota' =>	[
			'required' => 'Kota wajib dipilih'
		],
		'kecamatan' =>	[
			'required' => 'Kecamatan wajib dipilih'
		],
		'kelurahan' =>	[
			'required' => 'Kelurahan wajib dipilih'
		],
		'telp_1' =>	[
			'required' => 'Nomor telepon wajib diisi'
		],
		'status_nikah' =>	[
			'required' => 'Status pernikahan wajib diisi'
		],
		'pekerjaan' =>	[
			'required' => 'Jenis pekerjaan wajib diisi'
		],
		'nama_perumahan' =>	[
			'required' => 'Nama perumahan wajib diisi'
		],
		'blok' =>	[
			'required' => 'Nama blok atau komplek perumahan wajib diisi'
		],
		'tipe' =>	[
			'required' => 'Tipe rumah wajib diisi'
		],
		'file_ktp' =>	[
			'required' => 'File KTP wajib diunggah'
		],
		'file_kk' =>	[
			'required' => 'File Kartu Keluarga wajib diisi'
		],
	];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
