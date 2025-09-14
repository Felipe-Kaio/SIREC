<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reclamacoes extends Migration
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
			'clients_id'       => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'  => true,
			],
			'area'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100'
			],
			'menssage'       => [
				'type'       => 'TEXT',
				'constraint' => '3000'
			],
			'atachmentts'       => [
				'type'       => 'VARCHAR',
				'constraint' => '1000',
				'null' => true,
			],
			'status'       => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'created_at' => [
				'type'    => 'DATETIME',
				'null' => true,
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
		$this->forge->createTable('complaints');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('complaints');
	}
}
