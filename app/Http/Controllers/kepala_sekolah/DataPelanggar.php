<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Models\admin\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\SiswaController;

class DataPelanggar extends SiswaController
{
    public function index($id)
    {
        $data = array(
            "id" => $id,
            "data_siswa" => $this->getDataSiswa()
        );
        return TemplateController::templateHandler("kepala_sekolah/pelanggaran_perkelas", $data, "Data Pelanggar");
    }
}
