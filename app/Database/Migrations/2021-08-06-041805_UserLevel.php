<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserLevel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'name' => ['type' => 'varchar', 'constraint' => 100],
			'description' => ['type' => 'text', 'null' => true],
			'active' => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
			'created_at' => ['type' => 'datetime', 'null' => true],
			'updated_at' => ['type' => 'datetime', 'null' => true]
		]);
		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('name');
		$this->forge->createTable('user_level', true);
	}

	public function down()
	{
		$this->forge->dropTable('user_level', true);
	}
}
