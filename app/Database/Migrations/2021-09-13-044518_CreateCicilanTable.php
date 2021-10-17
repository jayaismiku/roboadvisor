<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCicilanTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_rumah' => [
				'type' => 'int',
				'constraint' => 11,
			],
			'no_cicilan' => [
				'type' => 'int',
				'constraint' => 11,
			],
			'nama_bank' => [
				'type' => 'varchar',
				'constraint' => 100,
			],
			'no_rekening' => [
				'type' => 'int',
				'constraint' => 100,
			],
			'nama_pengirim' => [
				'type' => 'varchar',
				'constraint' => 100,
			],
			'tanggal_kirim' => [
				'type' => 'date',
				'null' => true,
			],
			'waktu_kirim' => [
				'type' => 'time',
				'null' => true,
			],
			'bukti' => [
				'type' => 'varchar',
				'constraint' => 100,
				'null' => true,
			],
			'created_at' => [
				'type' => 'datetime',
				'null' => true
			],
			'updated_at' => [
				'type' => 'datetime',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('payments', true);
	}

	public function down()
	{
		$this->forge->dropTable('payments', true);
	}
}
