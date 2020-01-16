<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVocabularyTable extends Migration
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
            'description' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('vocabulary');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('vocabulary');
    }
}
