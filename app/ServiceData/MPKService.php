<?php

namespace App\ServiceData;

use App\Http\Requests\StoreMPKRequest;
use App\Http\Requests\UpdateMPKRequest;
use App\Repos\MPKRepos;

class MPKService
{
    private MPKRepos $mpkrepos;

    public function __construct($model)
    {
        $this->mpkrepos = new MPKRepos($model);
    }
    public function getMPKData()
    {
        return $this->mpkrepos->getAllData();
    }
    public function handlerInsertData(StoreMPKRequest $request)
    {
        $data = $request->validated();
        return $this->mpkrepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateMPKRequest $request, $id)
    {
        $data = $request->validated();
        return $this->mpkrepos->updateData($data, $id);
    }
    public function handlerDeleteData($id)
    {
        return $this->mpkrepos->hapusData($id);
    }
}
