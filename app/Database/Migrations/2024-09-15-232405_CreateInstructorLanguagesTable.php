<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInstructorLanguagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'instructor_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'language_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addForeignKey('instructor_id', 'instructors', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('language_id', 'languages', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('instructor_languages');
    }

    public function down()
    {
        $this->forge->dropTable('instructor_languages');
    }
}
