<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class users extends Migration
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
			'senha'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'tipo'       => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'created_at' => [
				'type'    => 'DATETIME',
			],
			'updated_at' => [
				'type'    => 'DATETIME',
				'null' => true,
			],
			'deleted_at' => [
				'type'    => 'DATETIME',
				'default' => null,
				'null' => true,
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
