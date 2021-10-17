<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
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
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('products');
	}

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
