<?php

namespace App\Repos;

use App\Models\admin\Guru;
use App\Models\admin\Jurusan;

class GuruRepos extends BaseRepos
{
    private $role;
    public function __construct(Guru $jurusan, $role)
    {
        $this->model = $jurusan;
        $this->role = $role;
    }
    //override
    public function getAllData()
    {
        return parent::getAllData()->where('role', $this->role);
    }

}
