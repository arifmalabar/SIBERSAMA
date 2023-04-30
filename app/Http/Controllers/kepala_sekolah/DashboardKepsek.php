<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardKepsek extends Controller
{
    public function index()
    {
        return view('kepala_sekolah/main');
    }
}
