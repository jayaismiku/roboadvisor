<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserLevelSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'name'            => 'administrator',
        'description'     => 'Administrator',
        'active'          => 1,
        'created_at'      => Time::now('Asia/Jakarta', 'id_ID'),
        'updated_at'      => Time::now('Asia/Jakarta', 'id_ID')
      ],
      [
        'name'            => 'direktur',
        'description'     => 'Direktur',
        'active'          => 1,
        'created_at'      => Time::now('Asia/Jakarta', 'id_ID'),
        'updated_at'      => Time::now('Asia/Jakarta', 'id_ID')
      ],
      [
        'name'            => 'manager marketing',
        'description'     => 'Manager Marketing',
        'active'          => 1,
        'created_at'      => Time::now('Asia/Jakarta', 'id_ID'),
        'updated_at'      => Time::now('Asia/Jakarta', 'id_ID')
      ],
      [
        'name'            => 'marketing',
        'description'     => 'Marketing',
        'active'          => 1,
        'created_at'      => Time::now('Asia/Jakarta', 'id_ID'),
        'updated_at'      => Time::now('Asia/Jakarta', 'id_ID')
      ],
      [
        'name'            => 'pembeli',
        'description'     => 'Pembeli',
        'active'          => 1,
        'created_at'      => Time::now('Asia/Jakarta', 'id_ID'),
        'updated_at'      => Time::now('Asia/Jakarta', 'id_ID')
      ]
    ];

    // Using Query Builder
    $this->db->table('user_level')->insertBatch($data);
  }
}
