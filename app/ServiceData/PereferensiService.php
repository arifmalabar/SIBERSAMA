<?php

namespace App\ServiceData;

use App\Http\Requests\StorePereferensiRequest;
use App\Http\Requests\UpdatePereferensiRequest;
use App\Repos\PereferensiRepos;

class PereferensiService
{
    private PereferensiRepos $pereferensiRepos;

    public function __construct($model)
    {
        $this->pereferensiRepos = new PereferensiRepos($model);
    }
    public function handlerGetData()
    {
        return $this->pereferensiRepos->getAllData();
    }
    public function handlerInsertData(StorePereferensiRequest $request)
    {
        $data = $request->validated();
        return $this->pereferensiRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdatePereferensiRequest $request, $id)
    {
        $data = $request->validated();
        return $this->pereferensiRepos->updateData($data, $id);
    }
    public function handlerDeleteData($id)
    {
        return $this->pereferensiRepos->hapusData($id);
    }
}
