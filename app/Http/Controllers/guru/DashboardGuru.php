<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardGuru extends Controller
{
    public function index()
    {
        return view('guru/main');
    }
}
