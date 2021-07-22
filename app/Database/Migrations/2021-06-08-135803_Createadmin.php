<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createadmin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_admin'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_admin'       	=> [
				'type'       			=> 'VARCHAR',
				'constraint' 			=> '100',
			],
			'password_admin' 		=> [
				'type' 						=> 'TEXT',
				'constraint'			=> '60',
			],
		]);
		$this->forge->addKey('id_admin', true);
		$this->forge->createTable('admin_hm');
	}

	public function down()
	{
		$this->forge->dropTable('admin_hm');
	}
}
