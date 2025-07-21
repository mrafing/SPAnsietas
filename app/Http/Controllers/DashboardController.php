<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $params = [
            'list_penyakit' => Penyakit::all(),
            'list_gejala' => Gejala::all()
        ];

        return view('dashboard', $params);
    }
}
