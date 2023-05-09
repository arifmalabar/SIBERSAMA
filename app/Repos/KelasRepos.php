<?php

namespace App\Repos;
use App\Models\admin\Kelas;
class KelasRepos extends BaseRepos
{

    public function __construct(Kelas $model)
    {
        $this->model = $model;
    }
}
