<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SahamModel;

class Dashboard extends BaseController
{
    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $model = new SahamModel();

        $data = [
            'heading' => 'LQ45QU adalah sistem penunjang keputusan investasi saham pada saham indeks LQ45 dengan menggunakan metode multicriteria co-compromise ranking (VIKOR)',
            'saham' => $model->findAll()
        ];

        return view('dashboard/index', $data);
    }
    public function financial()
    {
        $data = [
            'heading' => 'analisa rasio keuangan merupakan suatu perhitungan rasio dengan menggunakan laporan keuangan yang berfungsi sebagai alat ukur dalam menilai kondisi keuangan dan kinerja perusahaan, (Maulana, 2018).',
        ];
        return view('dashboard/financial', $data);
    }

    public function bobot()
    {
        $perbankan = $this->db->table('bobot_perbankan')->where('id_user', loggedIn())->get()->getFirstRow();
        $nonPerbankan = $this->db->table('bobot_non_perbankan')->where('id_user', loggedIn())->get()->getFirstRow();
        $data = [
            'heading' => 'Bobot kriteria diambil dari berbagai penelitian terkait pengaruh rasio keuangan pada kinerja harga saham pada bursa efek Indonesia.',
            'perbankan' => $perbankan,
            'nonPerbankan' => $nonPerbankan,
            'data' => $dataaa ?? 'oke'
        ];
        return view('dashboard/bobot', $data);
    }

    public function result()
    {
        $data = [
            'heading' => 'Metode VIKOR fokus pada perankingan dan memilih dari satu set sampel dengan kriteria yang saling bertentangan, yang dapat membantu para pengambil keputusan untuk mendapatkan keputusan akhir.'
        ];
        return view('dashboard/result', $data);
    }
}
