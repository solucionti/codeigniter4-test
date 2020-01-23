<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTable extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',

            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('user');

    }
}
