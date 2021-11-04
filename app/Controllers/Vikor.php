<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Vikor extends BaseController
{
    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        //
    }

    // Make new data in bobot_non_perbankan table when user signUp
    public function createBobotPerbankan($idUser)
    {
        $builder = $this->db->table('bobot_perbankan');
        return $builder->insert(['id_user' => $idUser]);
    }

    // Make new data in bobot_perbankan table when user signUp
    public function createBobotNonPerbankan($idUser)
    {
        $builder = $this->db->table('bobot_non_perbankan');
        return $builder->insert(['id_user' => $idUser]);
    }
}
