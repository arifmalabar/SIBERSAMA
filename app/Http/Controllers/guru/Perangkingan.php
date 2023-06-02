<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Models\guru\Kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\guru\DataJenisKriteria;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\admin\SiswaController;
use App\Http\Controllers\guru\DataKriteria;

class Perangkingan extends Controller
{
    private DataJenisKriteria $dataJenisKriteria;
    private EntryPelanggaran $entryPelanggaran;
    private SiswaController $siswaController;
    private DataKriteria $dataKriteria;
    private $max;
    public function __construct()
    {
        $this->dataJenisKriteria = new DataJenisKriteria();
        $this->siswaController = new SiswaController();
        $this->entryPelanggaran = new EntryPelanggaran();
        $this->dataKriteria = new DataKriteria();
        $this->hitJmlKriteria();
    }
    public function index()
    {
        $data = array(
            "jenis_kriteria" => $this->dataJenisKriteria->getDataJeniSKriteria(),
            "perangkingan_controller" => new Perangkingan(),
            "data_siswa" => $this->siswaController->getDataWithoutID(),
            "data_kriteria" =>$this->dataKriteria->getDataKriteria()
        );
        return TemplateController::templateHandler('guru.perangkingan', $data, 'Perangkingan');
        //$this->setData();
        //dd($this->dataKriteria->getDataKriteria());
    }
    public function hitJmlKriteria()
    {
        $hasil = 0;
        foreach ($this->dataJenisKriteria->getDataJeniSKriteria() as $jk) {
            $hasil += $jk->bobot_poin;
        }
        return $hasil;
    }//jalan terakhir pakai SQL

    public function hitKepentingan($jmlBobot)
    {
        $hasil = $jmlBobot / $this->hitJmlKriteria();
        return $hasil;
    }
    public function getSiswaByKriteria($nisn, $jenis_kriteria)
    {
        $hasil = 0;
        $data = $this->entryPelanggaran->getSiswaByKriteria($nisn, $jenis_kriteria);
        foreach ($data as $d){
            if ($d->jenis_kriteria->kriteria->kode_kriteria == $jenis_kriteria){
                $hasil += $d->jenis_kriteria->bobot_poin;
            }
        }
        return $hasil;
    }
    public function setData()
    {
        $data = array();
        $idx = 0;
        $data_kriteria = $this->dataKriteria->getDataKriteria();
        foreach ($data_kriteria as $dk){
            $data['nama_kriteria'][$idx] = $dk->nama_kriteria;
            $idx++;
        }
        $idx =0;
        foreach($data_kriteria as $dk){
            $data['bobot'][$idx] = $dk->jenis_kriteria->bobot_poin;
            $idx++;
        }
        print_r($data);
    }
    public function jmlKepetingan()
    {
        $hasil = 0.0;
        foreach ($this->dataJenisKriteria->getDataJeniSKriteria() as $jk) {
            $hasil += $this->hitKepentingan($jk->bobot_poin);
        }
        return $hasil;
    }
    private function getBenefit($poin_pelanggaran)
    {
        $data = array(
            [
                "nama_siswa" =>"Ridho Arif", //datanya ambil dari tb_siswa
                "nilai"=> [ //datanya ambil dari tb_pelanggaran
                    ["benefit" => "20"],
                    ["benefit" => "290"],
                    ["benefit" => "200"]
                ],
                "max_data" => "200",
                "hasil_normalisasi" => [],
            ],
            [
                "nama_siswa" =>"Ludit", //datanya ambil dari tb_siswa
                "nilai"=> [ //datanya ambil dari tb_pelanggaran
                    ["benefit" => "210"],
                    ["benefit" => "90"],
                    ["benefit" => "700"]
                ],
                "max_data" => 0,
                "hasil_normalisasi" => [],
            ]
        );
        for ($s = 0; $s < count($data); $s++)
        {
            $max =0;
            $next = $s;
            echo $data[$s]['nama_siswa']."<br>";

            /*foreach ($data[$s]['nilai'] as $n){
                $s['hasil_normalisasi'][$n] = $n['benefit'][] / $max;
            }
            //echo "<br> Nilai Maks: ".$max;
            echo "<br>";
            for ($i = 0; $i < count($s['hasil_normalisasi']); $i++) {
                echo $s['hasil_normalisasi'][$i]." ";
            }*/

            //dd($s);
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
