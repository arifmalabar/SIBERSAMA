<?php

namespace App\Repos;

class PelanggaranRepos extends BaseRepos
{

    public function __construct($model)
    {
        $this->model = $model;
    }
    public function getAllDataByNISN($id)
    {
        return parent::getAllData()->where('NISN', $id); // TODO: Change the autogenerated stub
    }
    public function getAllDataByYear($year)
    {
        return parent::getAllData()->where('YEAR(tanggal_pelanggaran)', $year);
    }
    public function getALlDataByMonth($month)
    {
        return parent::getAllData()->where('MONTH(tanggal_pelanggaran)', $month);
    }
    public function getAllDataByDay($day)
    {
        return parent::getAllData()->where('DAY(tanggal_pelanggaran)', $day);
    }
}
