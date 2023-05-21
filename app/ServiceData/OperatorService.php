<?php

namespace App\ServiceData;

use App\Http\Requests\StoreOperatorRequest;
use App\Http\Requests\UpdateOperatorRequest;
use App\Repos\OperatorRepos;

class OperatorService
{
    private OperatorRepos $operatorRepos;

    /**
     * @param $operatorRepos
     */
    public function __construct($model)
    {
        $this->operatorRepos = new OperatorRepos($model);
    }
    public function handlerGetData()
    {
        return $this->operatorRepos->getAllData();
    }
    public function handlerInsertData(StoreOperatorRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);
        return $this->operatorRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateOperatorRequest $request, $id)
    {
        $data = $request->validated();
        if(empty($data['password']))
        {
            $data['password'] = $request->old_password;
        } else {
            $data['password'] = bcrypt($request->password);
        }
        return $this->operatorRepos->updateData($data, $id);
    }
    public function handlerDelete($id)
    {
        //dd($id);
        return $this->operatorRepos->hapusData($id);
    }
}
