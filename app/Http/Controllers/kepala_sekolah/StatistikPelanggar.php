<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class StatistikPelanggar extends Controller
{
    public function index()
    {
        return TemplateController::templateHandler("kepala_sekolah/perbandingan", array(), "Laporan Perbandingan");
    }
    public function laporanall()
    {
        return TemplateController::templateHandler("kepala_sekolah/laporan_pelanggaran", array(), "Laporan Pelanggaran");
    }
}
