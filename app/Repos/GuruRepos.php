<?php

namespace App\Repos;

use App\Models\admin\Jurusan;

class GuruRepos extends BaseRepos
{

    public function __construct(Jurusan $jurusan)
    {
        $this->model = $jurusan;
    }
}
