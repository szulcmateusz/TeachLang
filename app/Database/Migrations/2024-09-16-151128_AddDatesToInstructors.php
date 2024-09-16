<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDatesToInstructors extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ]
        ];

        $this->forge->addColumn('instructors', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('instructors', ['created_at', 'updated_at']);
    }
}
