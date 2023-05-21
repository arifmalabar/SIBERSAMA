<?php

namespace App\Repos;
use App\Repos\BaseRepos;
use App\Models\admin\Jabatan;

class JabatanRepos extends BaseRepos
{
    public function __construct(Jabatan $jabatan)
    {
        $this->model = $jabatan;
    }
}
