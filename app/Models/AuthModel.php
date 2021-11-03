<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table                = 'users';
    protected $primaryKey           = 'id_user';
    protected $returnType           = 'object';
    protected $allowedFields        = ['email', 'password', 'role'];
}
