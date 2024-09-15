<?php namespace App\Models;

use CodeIgniter\Model;

class InstructorModel extends Model
{
    protected $table = 'instructors';
    protected $allowedFields = ['user_id', 'description', 'phone'];
}