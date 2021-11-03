<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public $model;

    public function __construct()
    {
        $this->model = new AuthModel();
    }
    public function index()
    {
        $data = [
            'session' => $this->session,
        ];
        return view('auth/login.php', $data);
    }

    public function register()
    {
        $data = [
            'session' => $this->session,
        ];
        return view('auth/register', $data);
    }

    public function createAuth()
    {
        $validation = \Config\Services::validation();

        $data = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'passwordConfirm' => $this->request->getPost('passwordConfirm')
        ];

        if (!$validation->run($data, 'signup')) {
            $this->session->setFlashData('type', 'danger');
            return redirect()->back()->withInput()->with('notif', 'gagal membuat akun baru');
        } else {
            return 'oke';
        }
    }
}
