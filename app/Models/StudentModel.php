<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students'; // Table name
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['name', 'gender', 'age', 'program_of_study']; // Fields that can be updated or inserted
    protected $returnType = 'array'; // Return data as an array
    protected $useTimestamps = false; // Disable automatic timestamps
}
