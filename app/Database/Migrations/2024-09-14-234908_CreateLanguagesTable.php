<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLanguagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'code' => [
                'type'       => 'CHAR',
                'constraint' => '2',
                'null'       => false,
                'unique'     => true,
            ],
            'image_path' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('languages');
    }

    public function down()
    {
        $this->forge->dropTable('languages');
    }
}
