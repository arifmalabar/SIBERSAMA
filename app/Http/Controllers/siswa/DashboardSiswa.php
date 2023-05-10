<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\TemplateController;

class DashboardSiswa extends Controller
{
    public function index()
    {
        return TemplateController::templateHandler("siswa/main", array(), "Dashboard");
    }
}
