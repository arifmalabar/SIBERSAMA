<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class DataPelanggar extends Controller
{
    public function index($id)
    {
        return TemplateController::templateHandler("kepala_sekolah/pelanggaran_perkelas", array(), "Data Pelanggar");
    }
}
