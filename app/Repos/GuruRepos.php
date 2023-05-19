<?php

namespace App\Repos;

use App\Models\admin\Guru;
use App\Models\admin\Jurusan;

class GuruRepos extends BaseRepos
{

    public function __construct(Guru $jurusan)
    {
        $this->model = $jurusan;
    }
    //override
    public function getAllData()
    {
        return parent::getAllData()->where('role', 1);
    }

}
