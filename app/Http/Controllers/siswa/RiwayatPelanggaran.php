<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use App\Http\Controllers\guru\EntryPelanggaran;
use PDF;

class RiwayatPelanggaran extends Controller
{
    private EntryPelanggaran $entryPelanggaran;

    /**
     * @param PelanggaranController $pelanggaranController
     */
    public function __construct()
    {
        $this->entryPelanggaran = new EntryPelanggaran();
    }

    public function index($id)
    {
        $data = array(
          "pelanggaran_data" =>$this->entryPelanggaran->getPelanggaranSemester($id),
            "semester" => $id
        );
        return TemplateController::templateHandler("siswa/riwayat_pelanggaran", $data, "Riwayat Pelanggaran");
    }
    public function exportRiwayat($id)
    {
        $data = array(
            "pelanggaran_data" =>$this->entryPelanggaran->getPelanggaranSemester($id),
            "semester" => $id
        );
        $pdf = PDF::loadview('export/export_riwayat_pelanggaran',$data);
        return $pdf->download('riwayat pelanggaran.pdf');
    }
}
