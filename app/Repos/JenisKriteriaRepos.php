<?php

namespace App\Repos;

class JenisKriteriaRepos extends BaseRepos
{
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function getAllDataByid($id)
    {
        return parent::getAllData()->where('kode_kriteria', $id);
    }

}
