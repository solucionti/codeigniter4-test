<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTaxonomyTable extends Migration
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
            'vocabulary_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
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
        $this->forge->createTable('taxonomy');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('taxonomy');

    }
}
