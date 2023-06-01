<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\guru\DataJenisKriteria;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\admin\SiswaController;

class Perangkingan extends Controller
{
    private DataJenisKriteria $dataJenisKriteria;
    private PelanggaranController $pelanggaranController;
    private SiswaController $siswaController;
    public function __construct()
    {
        $this->dataJenisKriteria = new DataJenisKriteria();
        $this->siswaController = new SiswaController();
        $this->pelanggaranController = new PelanggaranController();
        $this->hitJmlKriteria();
    }
    public function index()
    {
        $this->jmlKepetingan();
    }
    private function hitJmlKriteria()
    {
        $hasil = 0;
        foreach ($this->dataJenisKriteria->getDataJeniSKriteria() as $jk)
        {
            $hasil += $jk->bobot_poin;
        }
        return $hasil;
    }
    private function hitKepentingan($jmlBobot)
    {
        $hasil = $jmlBobot / $this->hitJmlKriteria();
        return $hasil;
    }
    private function jmlKepetingan()
    {
        $hasil = 0.0;
        foreach ($this->dataJenisKriteria->getDataJeniSKriteria() as $jk)
        {
            $hasil += $this->hitKepentingan($jk->bobot_poin);
        }
        return $hasil;
    }//sampai sini dulu boss ngantuk
    private function getBenefit($poin_pelanggaran)
    {
        foreach ($this->siswaController->getDataWithoutID() as $s)
        {
            $min = 0;
            foreach ($s->data_pelanggar as $dp)
            {

            }
        }
    }
    private function dividerVariabel()
    {

    }
    private function normalisasi()
    {

    }
    public function getRangking()
    {

    }
}
