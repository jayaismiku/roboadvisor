<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UsersSeeder extends Seeder
{
	public function run()
	{
		helper('text');
		$data = [
			[
				'email' 					=> 'administrator@rumahkusyurgaku.id',
				'new_email'    		=> null,
				'password_hash'		=> password_hash('Password1!', PASSWORD_DEFAULT),
				'name'						=> 'Administrator',
				'activate_hash'		=> random_string('alnum', 32),
				'reset_hash'			=> null,
				'reset_expires'		=> null,
				'level'						=> 1,
				'active'					=> 1,
				'created_at'			=> Time::now(),
				'updated_at'			=> Time::now()
			],
			[
				'email' 					=> 'direktur@rumahkusyurgaku.id',
				'new_email'    		=> null,
				'password_hash'		=> password_hash('Password2@', PASSWORD_DEFAULT),
				'name'						=> 'Direktur',
				'activate_hash'		=> random_string('alnum', 32),
				'reset_hash'			=> null,
				'reset_expires'		=> null,
				'level'						=> 2,
				'active'					=> 1,
				'created_at'			=> Time::now(),
				'updated_at'			=> Time::now()
			],
			[
				'email' 					=> 'managermarketing@rumahkusyurgaku.id',
				'new_email'    		=> null,
				'password_hash'		=> password_hash('Password3#', PASSWORD_DEFAULT),
				'name'						=> 'Manager Marketing',
				'activate_hash'		=> random_string('alnum', 32),
				'reset_hash'			=> null,
				'reset_expires'		=> null,
				'level'						=> 3,
				'active'					=> 1,
				'created_at'			=> Time::now(),
				'updated_at'			=> Time::now()
			],
			[
				'email' 					=> 'marketing@rumahkusyurgaku.id',
				'new_email'    		=> null,
				'password_hash'		=> password_hash('Password4$', PASSWORD_DEFAULT),
				'name'						=> 'Marketing',
				'activate_hash'		=> random_string('alnum', 32),
				'reset_hash'			=> null,
				'reset_expires'		=> null,
				'level'						=> 4,
				'active'					=> 1,
				'created_at'			=> Time::now(),
				'updated_at'			=> Time::now()
			],
			[
				'email' 					=> 'pembeli.pertama@gmail.com',
				'new_email'    		=> null,
				'password_hash'		=> password_hash('Password5%', PASSWORD_DEFAULT),
				'name'						=> 'Pembeli Pertama',
				'activate_hash'		=> random_string('alnum', 32),
				'reset_hash'			=> null,
				'reset_expires'		=> null,
				'level'						=> 5,
				'active'					=> 1,
				'created_at'			=> Time::now(),
				'updated_at'			=> Time::now()
			],
			[
				'email' 					=> 'pembeli.kedua@gmail.com',
				'new_email'    		=> null,
				'password_hash'		=> password_hash('Password5%', PASSWORD_DEFAULT),
				'name'						=> 'Pembeli kedua',
				'activate_hash'		=> random_string('alnum', 32),
				'reset_hash'			=> null,
				'reset_expires'		=> null,
				'level'						=> 5,
				'active'					=> 1,
				'created_at'			=> Time::now(),
				'updated_at'			=> Time::now()
			],
			[
				'email' 					=> 'pembeli.ketiga@gmail.com',
				'new_email'    		=> null,
				'password_hash'		=> password_hash('Password5%', PASSWORD_DEFAULT),
				'name'						=> 'Pembeli Ketiga',
				'activate_hash'		=> random_string('alnum', 32),
				'reset_hash'			=> null,
				'reset_expires'		=> null,
				'level'						=> 5,
				'active'					=> 1,
				'created_at'			=> Time::now(),
				'updated_at'			=> Time::now()
			],
		];

		// Using Query Builder
		$this->db->table('users')->insertBatch($data);
	}
}
