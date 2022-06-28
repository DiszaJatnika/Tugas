<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'salt' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'role'      => [
				'type'           => 'ENUM',
				'constraint'     => ["1","2"],
				'default'        => "2",
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('user', TRUE);

    }

    public function down()
    {
        //
		$this->forge->dropTable('user');
    }
}
