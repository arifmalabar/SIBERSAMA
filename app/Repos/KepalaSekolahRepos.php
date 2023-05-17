<?php

namespace App\Repos;

use App\Models\admin\Guru;

class KepalaSekolahRepos extends BaseRepos
{
    public function __construct(Guru $guru)
    {
        $this->model = $guru;
    }
}
