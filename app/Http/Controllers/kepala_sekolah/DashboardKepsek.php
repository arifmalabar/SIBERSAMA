<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class DashboardKepsek extends Controller
{
    public function index()
    {
        return TemplateController::templateHandler("kepala_sekolah/main", array(), "Dashboard");
    }
}
