<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use App\Http\Controllers\guru\EntryPelanggaran;

class DashboardKepsek extends Controller
{
    private EntryPelanggaran $entryPelanggaran;
    private $data_pelanggaran;

    /**
     * @param PelanggaranController $pelanggaranController
     */
    public function __construct()
    {
        $this->entryPelanggaran = new EntryPelanggaran();
        $this->data_pelanggaran = $this->entryPelanggaran->getPelanggaranData();
    }

    public function index()
    {
        $data = array(
          "dashboard_controller" => new DashboardKepsek(),
          "pelanggaran" => new EntryPelanggaran(),
        );
        return TemplateController::templateHandler("kepala_sekolah/main", $data, "Dashboard");
    }
    public function getPelanggaranRendah()
    {
        $min = 0;
        foreach($this->data_pelanggaran as $dt)
        {
            $bobot = $dt->jenis_kriteria->bobot_poin;
            if($bobot < $min){
                $min = $bobot;
            }
        }
        return $min;
    }
    public function getPelanggaranSedang()
    {
        $sedang = 0;
        foreach ($this->data_pelanggaran as $dt)
        {
            $bobot = $dt->jenis_kriteria->bobot_poin;
            if($bobot < 70 && $bobot >= 20){
                $sedang = $bobot;
            }
        }
        return $sedang;
    }
    public function getPelanggaranTingkatTinggi()
    {
        $max = 0;
        foreach($this->data_pelanggaran as $dp){
            $bobot = $dp->jenis_kriteria->bobot_poin;
            if($bobot >= $max){
                $max = $bobot;
            }
        }
        return $max;
    }
    public function pelanggaranTotal()
    {

    }
}
