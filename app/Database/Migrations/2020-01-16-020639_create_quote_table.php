<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuoteTable extends Migration
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
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'mail' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'version_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'version_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('quote');

    }

    //--------------------------------------------------------------------

    public function down()
    {
        //
    }
}
