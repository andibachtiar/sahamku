<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }
    public function financial()
    {
        return view('dashboard/financial');
    }
    public function bobot()
    {
        return view('dashboard/bobot');
    }
    public function result()
    {
        return view('dashboard/result');
    }
}
