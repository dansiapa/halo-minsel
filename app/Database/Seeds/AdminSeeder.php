<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'nama_admin' 			=> 'admin',
			'password_admin' 	=> password_hash('12345', PASSWORD_BCRYPT),
		];
		$this->db->table('admin_hm')->insert($data); 
	}
}
