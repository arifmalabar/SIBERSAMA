<?php

namespace App\ServiceData;

use App\Http\Requests\StoreKepalaSekolahRequest;
use App\Http\Requests\UpdateKepalaSekolahRequest;

class KepalaSekolahService
{
    private $kepalaSekolahRepos;

    /**
     * @param $kepalaSekolahRepos
     */
    public function __construct($kepalaSekolahRepos)
    {
        $this->kepalaSekolahRepos = $kepalaSekolahRepos;
    }
    public function handlerGetData()
    {
        return $this->kepalaSekolahRepos->getAllData();
    }
    public function handlerInsertData(StoreKepalaSekolahRequest $request)
    {
        $data = $request->validated();
        $data['role'] = 0;
        return $this->kepalaSekolahRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateKepalaSekolahRequest $request, $id)
    {
        $data = $request->validated();
        $data['role'] = 0;
        return $this->kepalaSekolahRepos->updateData($data);
    }
    public function handlerDelete($id)
    {
        return $this->kepalaSekolahRepos->hapusData($id);
    }
}
