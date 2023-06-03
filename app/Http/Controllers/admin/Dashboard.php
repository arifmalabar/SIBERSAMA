<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Models\admin\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\KepangkatanController;
use App\Http\Controllers\admin\JabatanController;
use App\Http\Controllers\admin\JurusanController;
use App\Http\Controllers\admin\KelasController;
use App\Http\Controllers\admin\SiswaController;

class Dashboard extends Controller
{
    private $jurusan, $kelas, $jabatan, $pangkat, $siswa, $guru;

    /**
     * @param $jurusan
     */
    public function __construct()
    {
        $this->jurusan = new JurusanController();
        $this->kelas = new KelasController();
        $this->jabatan = new JabatanController();
        $this->pangkat = new KepangkatanController();
        $this->siswa = new SiswaController();
        $this->guru = new GuruController();
    }

    public function main()
    {
        $kelas = count($this->kelas->getDataKelas());
        $jabatan = count($this->jabatan->getJabatan());
        $siswa = count($this->siswa->getDataWithoutID());
        $guru = count($this->guru->getDataGuru());
        $jurusan = count($this->jurusan->getDataJurusan());
        $pangkat = count($this->pangkat->getPangkat());
        $jumlah = $jabatan + $guru + $pangkat;
        $data = array(
            'kepangkatan' => $this->pangkat->getPangkat(),
            'jabatan' => $this->jabatan->getJabatan(),
            'count_kelas' => $kelas,
            'count_jabatan' => $jabatan,
            'count_siswa' => $siswa,
            'count_guru' => $guru,
            'count_jurusan' => $jurusan,
            'jumlah' => $jumlah
        );
        return TemplateController::templateHandler("admin/main", $data, "Dashboard");
    }
}
