<?php

namespace App\Repos;

use App\Models\admin\Siswa;

class SiswaRepos extends BaseRepos
{
    private $nisn;
    public function __construct(Siswa $siswa, $nisn)
    {
        $this->model = $siswa;
        $this->nisn = $nisn;
    }
    //override
    public function getAllData()
    {
        return parent::getAllData()->find($this->nisn);
    }
}
