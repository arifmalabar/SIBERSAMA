<?php

namespace App\ServiceData;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;
use App\Models\admin\Jabatan;
use App\Repos\JabatanRepos;
use Illuminate\Support\Str;

class JabatanService
{
    private JabatanRepos $jabatanRepos;

    public function __construct($model)
    {
        $this->jabatanRepos = new JabatanRepos($model);
    }
    public function handlerGetData()
    {
        return $this->jabatanRepos->getAllData();
    }
    public function handlerInsertData(StoreJabatanRequest $request)
    {
        $data = $request->validated();
        $data['kd_jabatan'] = Str::random(8);
        return $this->jabatanRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateJabatanRequest $request, $id)
    {
        $data = $request->validated();
        return $this->jabatanRepos->updateData($data, $id);
    }
    public function handlerDeleteData($id)
    {
        return $this->jabatanRepos->hapusData($id);
    }
}
