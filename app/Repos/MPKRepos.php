<?php

namespace App\Repos;

class MPKRepos extends BaseRepos
{

    public function __construct($model)
    {
        $this->model = $model;
    }
}
