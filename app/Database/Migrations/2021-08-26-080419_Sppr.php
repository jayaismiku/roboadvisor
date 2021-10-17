<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sppr extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' =>	[
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'form_id' => ['type' => 'VARCHAR', 'constraint' => '10',],
			'id_pembeli' => ['type' => 'INT', 'constraint' => 3, 'null' => true,],
			'nama_pembeli' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true,],
			'alamat_ktp' => ['type' => 'TEXT', 'null' => true,],
			'alamat_domisili' => ['type' => 'TEXT', 'null' => true,],
			'telp_1' => ['type' => 'varchar', 'constraint' => 15, 'null' => true,],
			'telp_2' => ['type' => 'varchar', 'constraint' => 15, 'null' => true,],
			'status_nikah' => ['type' => 'ENUM', 'constraint' => ['nikah', 'belum nikah', 'duda', 'janda'], 'default' => 'nikah',],
			'pekerjaan' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true,],
			'nama_perumahan' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true,],
			'lokasi' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true,],
			'blok' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true,],
			'tipe' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true,],
			'luas_tanah' => ['type' => 'INT', 'constraint' => 5, 'null' => true,],
			'luas_bangunan' => ['type' => 'INT', 'constraint' => 5, 'null' => true,],
			'metode_pembelian' => ['type' => 'INT', 'constraint' => 3, 'null' => true,],
			'harga_jual_standar' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'uang_muka_standar' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'diskon' => ['type' => 'INT', 'constraint' => 3, 'null' => true,],
			'biaya_tambahan' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'kelebihan_tanah' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'total_harga_jual' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'uang_muka' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'total_cicilan' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'cicilan_per_bulan' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'sisa_hutang' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'dibayar' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'kewajiban_per_bulan' => ['type' => 'INT', 'constraint' => 15, 'null' => true,],
			'file_ktp' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true,],
			'status_persetujuan' => ['type' => 'ENUM', 'constraint' => ['diajukan', 'diproses', 'disetujui'], 'default' => 'diajukan'],
			'created_at' => ['type' => 'bigint', 'null' => true],
			'updated_at' => ['type' => 'bigint', 'null' => true],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('sppr', true);
	}

	public function down()
	{
		$this->forge->dropTable('sppr');
	}
}
