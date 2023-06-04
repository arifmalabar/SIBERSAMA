<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use App\Http\Controllers\guru\EntryPelanggaran;
use App\ServiceData\PelanggaranService;
use App\Models\guru\Pelanggaran;

class StatistikPelanggar extends Controller
{
    private PelanggaranService $pelanggaranService;
    private Pelanggaran $pelanggaran;
    /**
     * @param PelanggaranService $pelanggaranService
     */
    public function __construct(){
        $this->pelanggaran= new Pelanggaran();
        $this->pelanggaranService = new PelanggaranService($this->pelanggaran);
    }

    public function index()
    {
        return TemplateController::templateHandler("kepala_sekolah/perbandingan", array(), "Laporan Perbandingan Pelanggaran");
    }
    public function laporanall()
    {
        //return TemplateController::templateHandler("kepala_sekolah/laporan_pelanggaran", array(), "Laporan Perbandingan Pelanggaran");
        $this->getDataPelanggar();
    }
    public function getDataPelanggar()
    {
        $total_bobot = 0;
        $data = $this->pelanggaranService->getPelanggaranByCriteria('tahun', date('Y'));
        foreach ($data as $dt)
        {
            $total_bobot += $dt->jenis_kriteria->bobot_poin;
        }
        echo $total_bobot;
    }
}
