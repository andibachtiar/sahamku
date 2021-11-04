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
    public $signin = [
        'email' => 'required|valid_email|is_not_unique[users.email.where_field.where_value]',
        'password' => 'required|alpha_numeric|min_length[8]|max_length[20]',
    ];

    public $signin_errors = [
        'email' => [
            'required' => 'Email tidak boleh kosong',
            'valid_email' => 'Format email tidak valid',
            'is_not_unique' => 'Email tidak terdaftar'
        ],
        'password' => [
            'required' => 'Password tidak boleh kosong',
            'alpha_numeric' => 'Hanya boleh menggunakan alfabet dan nomor',
            'min_length' => 'panjang minimal 8 karakter',
            'max_length' => 'panjang maksimal 20 karakter'
        ],
    ];

    public $bobot = [
        'car' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
        'nim' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
        'npm' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
        'ldr' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
        'eps' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
        'roa' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
        'roe' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
        'eva' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
        'tato' => 'require|integer|greater_than[0]|less_than_equal_to[100]',
    ];

    public $bobot_errors = [
        'car' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ],
        'nim' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ],
        'npm' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ],
        'ldr' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ],
        'eps' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ],
        'roa' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ],
        'roe' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ],
        'eva' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ],
        'tato' => [
            'required' => 'Kolom tidak boleh kosong',
            'integer' => 'Kolom hanya boleh berisi bilangan bulat',
            'greater_than' => 'Bobot tidak boleh lebih kecil dari 0%',
            'less_than_' => 'Bobot tidak boleh lebih besar dari 0%'
        ]
    ];
}
