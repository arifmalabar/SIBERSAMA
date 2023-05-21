<?php

namespace App\ServiceData;

use App\DataInterface\HandlerDataInterface;
use App\DataInterface\Request;
use App\Http\Requests\StorePangkatRequest;
use App\Http\Requests\UpdatePangkatRequest;
use App\Repos\PangkatRepos;

class PangkatService
{
    private PangkatRepos $pangkatRepos;
    public function __construct($model)
    {
        $this->pangkatRepos = new PangkatRepos($model);
    }
    public function handlerGetData()
    {
        return $this->pangkatRepos->getAllData();
    }
    public function handlerInsertData(StorePangkatRequest $request)
    {
        $data = $request->validated();
        return $this->pangkatRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdatePangkatRequest $request, $id)
    {
        $data = $request->validated();
        return $this->pangkatRepos->updateData($data, $id);
    }
    public function handlerDeleteData($id)
    {
        return $this->pangkatRepos->hapusData($id);
    }
}
