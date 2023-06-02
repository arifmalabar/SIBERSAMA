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
        $this->getBenefit(1);
    }

    private function hitJmlKriteria()
    {
        $hasil = 0;
        foreach ($this->dataJenisKriteria->getDataJeniSKriteria() as $jk) {
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
        foreach ($this->dataJenisKriteria->getDataJeniSKriteria() as $jk) {
            $hasil += $this->hitKepentingan($jk->bobot_poin);
        }
        return $hasil;
    }//sampai sini dulu boss ngantuk

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
            echo $data[$s]['nama_siswa'];
            foreach ($data[$s]['nilai'] as $n){
                echo " ".$n['benefit']." ";
                if($n['benefit'] > $max){
                    $max = $n['benefit'];
                }
            }
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
