<?php namespace App\Models;

use CodeIgniter\Model;

class InstructorModel extends Model
{
    protected $table = 'instructors';
    protected $allowedFields = ['user_id', 'description', 'phone'];

    public function getInstructorsByLanguage($languageId)
    {
        return $this->select('instructors.*, users.username as username')
            ->join('instructor_languages', 'instructors.id = instructor_languages.instructor_id')
            ->join('users', 'instructors.user_id = users.id')
            ->where('instructor_languages.language_id', $languageId)
            ->findAll();
    }
}