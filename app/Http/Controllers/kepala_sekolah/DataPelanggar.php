<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Models\admin\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\SiswaController;
use PDF;

class DataPelanggar extends SiswaController
{
    public function index($id)
    {
        $data = array(
            "id" => $id,
            "kelas" => $this->getKelas(),
            "data_siswa" => $this->getDataSiswa()
        );
        return TemplateController::templateHandler("kepala_sekolah/pelanggaran_perkelas", $data, "Data Pelanggar");
    }
    public function exportPelanggar($id)
    {
        $data = array(
            "id" => $id,
            "kelas" => $this->getKelas(),
            "data_siswa" => $this->getDataSiswa()
        );
        $pdf = PDF::loadview('export/export_pelanggar_kelas',$data);
        return $pdf->download('data pelanggar perkelas'.$this->getKelas().'.pdf');
    }
}
