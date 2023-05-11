<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function index()
    {
        return TemplateController::templateHandler("guru.laporan", array(), "Laporan");
    }
    public function perbandingan()
    {
        return TemplateController::templateHandler("guru.laporan_perbandingan", array(), "Laporan Perbandingan");
    }
}
