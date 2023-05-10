<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class AkunKepsek extends Controller
{
    public function index()
    {
        return TemplateController::templateHandler("kepala_sekolah/akun", array(), "Akun");
    }
}
