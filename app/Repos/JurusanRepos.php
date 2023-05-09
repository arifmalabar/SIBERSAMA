<?php

namespace App\Repos;
use App\Repos\BaseRepos;
use App\Models\admin\Jurusan;

class JurusanRepos extends BaseRepos
{
    public function __construct(Jurusan $jurusan)
    {
        $this->model = $jurusan;
    }

}
