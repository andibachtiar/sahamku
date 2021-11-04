<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Vikor extends BaseController
{
    public $db;
    public $validation;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->validation = \Config\Services::validation();
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

    public function updateBobotPerbankan($idUser)
    {
        $builder = $this->db->table('bobot_non_perbankan');
        $input = [
            'car' => $this->request->getPost('car'),
            'nim' => $this->request->getPost('nim'),
            'npm' => $this->request->getPost('npm'),
            'ldr' => $this->request->getPost('ldr'),
            'eps' => $this->request->getPost('eps'),
        ];
        $totalBobot = $input['car'] + $input['nim'] + $input['npm'] + $input['ldr'] + $input['eps'];
        self::ValidasiTotalBobot($totalBobot);

        if (!$this->validation->run($input, 'bobot')) {
            return redirect()->back()->withInput();
        }
    }

    public function updateBobotNonPerbankan($idUser)
    {
    }

    // Menghitung total bobot rasio keuangan
    public static function ValidasiTotalBobot($totalBobot)
    {
        if ($totalBobot > 100) {
            return redirect()->back()->with('danger', 'Total Bobot lebih dari 100%')->withInput();
        }
        if ($totalBobot < 100) {
            return redirect()->back()->with('danger', 'Total Bobot kurang dari 100%')->withInput();
        }
        if ($totalBobot === 100) {
            return $totalBobot;
        }
    }
}
