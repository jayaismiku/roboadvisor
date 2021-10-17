<?php

namespace Auth\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
	/*
	 * Users
	 */
	public function up()
	{
		$this->forge->addField([
			'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'email'                    => ['type' => 'varchar', 'constraint' => 191],
			'new_email'             => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
			'password_hash'            => ['type' => 'varchar', 'constraint' => 191],
			'name'                    => ['type' => 'varchar', 'constraint' => 191],
			'activate_hash'            => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
			'reset_hash'            => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
			'reset_expires'            => ['type' => 'bigint', 'null' => true],
			'level'                    => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 5],
			'active'                => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
			'created_at'            => ['type' => 'datetime', 'null' => true],
			'updated_at'            => ['type' => 'datetime', 'null' => true]
		]);
		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('email');
		$this->forge->addKey('level');
		// $this->forge->addForeignKey('level', 'user_level', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('users', true);

		// level user 0: admin 1: manager 2: marketing 3: user
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users', true);
	}
}
