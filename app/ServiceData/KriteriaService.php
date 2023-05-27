<?php

namespace App\ServiceData;
use App\Http\Requests\StoreKriteriaRequest;
use App\Http\Requests\UpdateKriteriaRequest;
use App\Repos\KriteriaRepos;

class KriteriaService
{
    private KriteriaRepos $kriteriaRepos;
    public function __construct($model)
    {
        $this->kriteriaRepos = new KriteriaRepos($model);
    }
    public function handlerGetData()
    {
        return $this->kriteriaRepos->getAllData();
    }
    public function handlerInsertData(StoreKriteriaRequest $request)
    {
        $data = $request->validated();
        return $this->kriteriaRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateKriteriaRequest $request, $id)
    {
        $data = $request->validated();
        return $this->kriteriaRepos->updateData($data, $id);
    }
    public function handlerDeleteData($id)
    {
        return $this->kriteriaRepos->hapusData($id);
    }
}
