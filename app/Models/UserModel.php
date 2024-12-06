<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Table name
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['username', 'password']; // Fields that can be updated or inserted
    protected $returnType = 'array'; // Return data as an array
    protected $useTimestamps = false; // Disable automatic timestamps
}
