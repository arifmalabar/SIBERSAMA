<?php

namespace App\Repos;

use App\Models\admin\Siswa;

class SiswaRepos extends BaseRepos
{
    private $kode_kelas;
    public function __construct(Siswa $siswa, $kode_kelas)
    {
        $this->model = $siswa;
        $this->kode_kelas = $kode_kelas;
    }
    //override
    public function getAllData()
    {
        return parent::getAllData()->where('kode_kelas', $this->kode_kelas);
    }
    public function getAllDataWithoutID()
    {
        return parent::getAllData();
    }
}
