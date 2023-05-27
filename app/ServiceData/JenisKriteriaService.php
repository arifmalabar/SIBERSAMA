<?php

namespace App\ServiceData;
use App\Http\Requests\StoreJenisKriteriaRequest;
use App\Http\Requests\UpdateJenisKriteriaRequest;
use App\Repos\JenisKriteriaRepos;
class JenisKriteriaService
{
    private JenisKriteriaRepos $jenisKriteriaRepos;

    public function __construct($model)
    {
        $this->jenisKriteriaRepos = new JenisKriteriaRepos($model);
    }
    public function handlerGetData()
    {
        return $this->jenisKriteriaRepos->getAllData();
    }
    public function handlerGetDataByid($id)
    {
        return $this->jenisKriteriaRepos->getAllDataByid($id);
    }
    public function handlerInsertData(StoreJenisKriteriaRequest $request)
    {
        $data = $request->validated();
        return $this->jenisKriteriaRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateJenisKriteriaRequest $request, $id)
    {
        $data = $request->validated();
        return $this->jenisKriteriaRepos->updateData($data, $id);
    }
    public function handlerDeleteData($id)
    {
        return $this->jenisKriteriaRepos->hapusData($id);
    }
}
