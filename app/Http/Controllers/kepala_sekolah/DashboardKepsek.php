<?php

namespace App\Http\Controllers\kepala_sekolah;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use App\Http\Controllers\guru\EntryPelanggaran;

class DashboardKepsek extends Controller
{
    private EntryPelanggaran $entryPelanggaran;

    /**
     * @param PelanggaranController $pelanggaranController
     */
    public function __construct()
    {
        $this->entryPelanggaran = new EntryPelanggaran();
    }

    public function index()
    {
        return TemplateController::templateHandler("kepala_sekolah/main", array(), "Dashboard");
    }
    private function getPelanggaranTinggi()
    {
        $max = 250;
        $data = $this->entryPelanggaran->getDataWithoutID();
        foreach ($data as $ds){
            foreach ($ds->data_pelanggar as $dp){

            }
        }
    }
    private function getPelanggaranSedang()
    {

    }
    private function getPelanggaranTingkatTinggi()
    {

    }
    private function getPelanggaranHariIni()
    {

    }
    private function getPelanggaranBulanIni()
    {

    }
    private function getPelanggaranTahunIni()
    {

    }
    private function pelanggaranTotal()
    {

    }
}
