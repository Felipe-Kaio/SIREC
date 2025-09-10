<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'nome'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
				'null' => true,
			],
			'created_at' => [
				'type'    => 'DATETIME',
				'null' => true,
			],
		]);


		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('clientes');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('clientes');
	}
}
