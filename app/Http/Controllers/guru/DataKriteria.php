<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class DataKriteria extends Controller
{
    public function index()
    {
        return TemplateController::templateHandler("guru.kriteria", array(), "Data Kriteria");
    }
    public function jk()
    {
        return TemplateController::templateHandler("guru.jenis_kriteria", array(), "Data Jenis Kriteria");
    }
}
