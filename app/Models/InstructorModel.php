<?php namespace App\Models;

use CodeIgniter\Model;

class InstructorModel extends Model
{
    protected $table = 'instructors';
    protected $allowedFields = ['user_id', 'description', 'phone'];

    protected $useTimestamps = true; // Włącza automatyczne zarządzanie czasami
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    public function getInstructorsByLanguage($languageId)
    {
        return $this->select('instructors.*, users.username as username')
            ->join('instructor_languages', 'instructors.id = instructor_languages.instructor_id')
            ->join('users', 'instructors.user_id = users.id')
            ->where('instructor_languages.language_id', $languageId)
            ->findAll();
    }

    public function getLatestInstructorsWithUsers($limit)
    {
        return $this->select('instructors.*, users.*')
        ->join('users', 'instructors.user_id = users.id')
        ->orderBy('instructors.id', 'DESC')
        ->limit($limit)
        ->findAll();
    }
}