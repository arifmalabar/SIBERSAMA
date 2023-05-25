<?php

namespace App\ServiceData;

use App\DataInterface\HandlerDataInterface;
use App\DataInterface\Request;
use App\Http\Requests\StoreKepangkatanRequest;
use App\Http\Requests\StorePangkatRequest;
use App\Http\Requests\UpdateKepangkatanRequest;
use App\Http\Requests\UpdatePangkatRequest;
use App\Repos\PangkatRepos;
use Illuminate\Support\Str;

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
    public function handlerInsertData(StoreKepangkatanRequest $request)
    {
        $kd_pangkat = Str::random(8);
        $data = $request->validated();
        $data['kode_pangkat'] = $kd_pangkat;
        return $this->pangkatRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateKepangkatanRequest $request, $id)
    {
        $data = $request->validated();
        return $this->pangkatRepos->updateData($data, $id);
    }
    public function handlerDeleteData($id)
    {
        return $this->pangkatRepos->hapusData($id);
    }
}
