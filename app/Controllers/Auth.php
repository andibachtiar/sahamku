<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Controllers\Vikor;

class Auth extends BaseController
{
    public $model;

    public function __construct()
    {
        $this->model = new AuthModel();
    }
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $input = $this->request->getPost();

        // redirect back when validation failed
        if (!$this->validation->run($input, 'signin')) {
            return redirect()->back()->withInput();
        }

        // Find User with registered email and verify password hash
        $user = $this->model->where('email', $input['email'])->first();
        $hashPassword = password_verify($input['password'], $user->password);

        // If password wrong redirect back
        if (!$hashPassword) {
            return redirect('/login')->with('danger', 'Email dan Password tidak sesuai');
        }
        session()->set('loggedIn', $user->id_user);
        return redirect()->to('/')->with('success', 'Selamat datang di <strong>LQ45QU</strong>');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function createAuth()
    {
        // Get Input Data
        $input = $this->request->getPost();
        // redirect back when validation failed
        if (!$this->validation->run($input, 'signup')) {
            return redirect()->back()->withInput();
        }

        $data = [
            'email' => $input['email'],
            'password' => password_hash($input['password'], PASSWORD_DEFAULT)
        ];
        // Insert data into user table
        $createUser = $this->model->insert($data);

        // If insert data failed, redirect back
        if (!$createUser) {
            return redirect()->back()->with('danger', 'Ada kesalahan! mohon coba beberapa saat lagi');
        }
        // Make new row for bobot perbankan and bobot non perbankan table
        $vikor = new Vikor();
        $makePerbankan = $vikor->CreateBobotPerbankan($createUser);
        $makeNonPerbankan = $vikor->createBobotNonPerbankan($createUser);

        // If success redirect to login page
        if ($makePerbankan && $makeNonPerbankan) {
            return redirect()->to('login')->with('success', 'Pendaftaran akun berhasil');
        }
    }

    public function logout()
    {
        session()->remove('loggedIn');
        return redirect()->to('login')->with('danger', 'Kamu telah Log Out dari sistem');
    }
}
