<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use App\Http\Controllers\guru\EntryPelanggaran;

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
        );
        return TemplateController::templateHandler("siswa/riwayat_pelanggaran", $data, "Riwayat Pelanggaran");

    }
}
