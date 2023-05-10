<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class RiwayatPelanggaran extends Controller
{
    public function index()
    {
        return TemplateController::templateHandler("siswa/riwayat_pelanggaran", array(), "Riwayat Pelanggaran");
    }
}
