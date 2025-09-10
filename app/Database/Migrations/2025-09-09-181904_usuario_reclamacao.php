<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuarioReclamacao extends Migration
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
			'usuario_id'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'reclamacao_id'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'deleted_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('usuario_reclamacoes');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('usuario_reclamacoes');
	}
}
