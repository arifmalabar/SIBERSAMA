<?php

namespace App\Repos;
use App\Models\admin\Operator;

class OperatorRepos extends BaseRepos
{
    public function __construct(Operator $operator)
    {
        $this->model = $operator;
    }
}
