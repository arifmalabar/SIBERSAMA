<?php

namespace App\Repos;

use App\Models\admin\Kepangkatan;

class PangkatRepos extends BaseRepos
{

    public function __construct(Kepangkatan $pangkat)
    {
        $this->model = $pangkat;
    }
}
