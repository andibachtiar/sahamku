<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Sign Up Rules
    //--------------------------------------------------------------------
    public $signup = [
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|alpha_numeric|min_length[8]|max_length[20]',
        'passwordConfirm' => 'required|alpha_numeric|min_length[8]|max_length[20]|matches[password]'
    ];
    public $signup_errors = [
        'email' => [
            'required' => 'Email tidak boleh kosong',
            'valid_email' => 'Format email tidak valid',
            'is_unique' => 'Email sudah terdaftar'
        ],
        'password' => [
            'required' => 'Password tidak boleh kosong',
            'alpha_numeric' => 'Hanya boleh menggunakan alfabet dan nomor',
            'min_length' => 'panjang minimal 8 karakter',
            'max_length' => 'panjang maksimal 20 karakter'
        ],
        'passwordConfirm' => [
            'required' => 'konfirmasi password tidak boleh kosong',
            'alpha_numeric' => 'Hanya boleh menggunakan alfabet dan nomor',
            'min_length' => 'panjang minimal 8 karakter',
            'max_length' => 'panjang maksimal 20 karakter',
            'matches' => 'konfirmasi password tidak sesuai'
        ],
    ];

    //--------------------------------------------------------------------
    // Sign In Rules
    //--------------------------------------------------------------------
    public $signin;
}
