<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class AkunSiswa extends Controller
{
    public function index()
    {
        //return "hello";
        return TemplateController::templateHandler("siswa/akun_siswa", array(), "Akun");
    }
}
