<?php

namespace App\ServiceData;

use App\Http\Requests\OperatorRequest;
use App\Http\Requests\UpdateOperatorRequest;

class OperatorService
{
    private $operatorRepos;

    /**
     * @param $operatorRepos
     */
    public function __construct($operatorRepos)
    {
        $this->operatorRepos = $operatorRepos;
    }
    public function handlerGetData()
    {
        return $this->operatorRepos->getAllData();
    }
    public function handlerInsertData(OperatorRequest $request)
    {
        $data = $request->validated();
        return $this->operatorRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateOperatorRequest $request, $id)
    {
        $data = $request->validated();
        return $this->operatorRepos->updateData($data);
    }
    public function handlerDelete($id)
    {
        return $this->operatorRepos->hapusData($id);
    }
}
