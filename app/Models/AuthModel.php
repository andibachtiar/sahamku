<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table                = 'sahamku';
    protected $primaryKey           = 'id_user';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'object';
    protected $protectFields        = true;
    protected $allowedFields        = ['email', 'password', 'role'];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
}
