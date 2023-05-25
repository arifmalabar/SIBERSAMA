<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class DataJenisKriteria extends DataKriteria
{
    public function index()
    {
        return TemplateController::templateHandler("guru.jenis_kriteria", array(), "Data Jenis Kriteria");
    }
}
