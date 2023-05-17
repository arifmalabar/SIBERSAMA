<?php

namespace App\ServiceData;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Repos\GuruRepos;
class GuruService
{
    private $guruRepos;

    /**
     * @param $guruRepos
     */
    public function __construct($guruRepos)
    {
        $this->guruRepos = $guruRepos;
    }
    public function handlerGetData()
    {
        return $this->guruRepos->getAllData();
    }
    public function handlerInsertData(StoreGuruRequest $request)
    {
        $data = $request->validated();
        $data['role'] = 1;
        return $this->guruRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateGuruRequest $request, $id)
    {
        $data = $request->validated();
        $data['role'] = 1;
        return $this->guruRepos->updateData($data);
    }
    public function handlerDelete($id)
    {
        return $this->guruRepos->hapusData($id);
    }
}
