<?php namespace App\Models;

use CodeIgniter\Model;

class InstructorLanguageModel extends Model
{
    protected $table = 'instructor_languages';
    protected $allowedFields = ['instructor_id', 'language_id'];
}