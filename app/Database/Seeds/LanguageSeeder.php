<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('languages')->truncate();

        $data = [
            ['name' => 'English', 'code' => 'en', 'image_path' => '/assets/img/flags/english.png'],
            ['name' => 'German', 'code' => 'de', 'image_path' => '/assets/img/flags/german.png'],
            ['name' => 'Spanish', 'code' => 'es', 'image_path' => '/assets/img/flags/spanish.png'],
            ['name' => 'French', 'code' => 'fr', 'image_path' => '/assets/img/flags/french.png'],
            ['name' => 'Italian', 'code' => 'it', 'image_path' => '/assets/img/flags/italian.png'],
            ['name' => 'Portuguese', 'code' => 'pt', 'image_path' => '/assets/img/flags/portuguese.png'],
            ['name' => 'Japanese', 'code' => 'ja', 'image_path' => '/assets/img/flags/japanese.png'],
            ['name' => 'Dutch', 'code' => 'nl', 'image_path' => '/assets/img/flags/dutch.png'],
        ];

        $this->db->table('languages')->insertBatch($data);
    }
}
