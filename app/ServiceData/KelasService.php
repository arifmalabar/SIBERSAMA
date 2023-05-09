<?php

namespace App\ServiceData;

use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Repos\KelasRepos;

class KelasService
{
    private $kelasRepos;

    /**
     * @param $kelasRepos
     */
    public function __construct($model)
    {
        $this->kelasRepos = new KelasRepos($model);
    }
    public function handlerGetData()
    {
        return $this->kelasRepos->getAllData();
    }
    public function handlerTambahData(StoreKelasRequest $request)
    {
        $data = $request->validated();
        return $this->kelasRepos->simpanData($data);
    }
    public function hanlderEditData(UpdateKelasRequest $request)
    {
        $data = $request->validated();
        return $this->kelasRepos->updateData($data);
    }
    public function handlerDeleteData($id)
    {
        return $this->kelasRepos->hapusData($id);
    }
}
