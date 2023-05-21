<?php

namespace App\ServiceData;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Repos\GuruRepos;
class GuruService
{
    protected GuruRepos $guruRepos;
    public $role = 1; //inisialisasi guru awal

    /**
     * @param $guruRepos
     */
    public function __construct($guru)
    {
        $this->guruRepos = new GuruRepos($guru, $this->role);
    }
    public function handlerGetData()
    {
        return $this->guruRepos->getAllData();
    }
    public function handlerInsertData(StoreGuruRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $data['role'] = $this->role;
        return $this->guruRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateGuruRequest $request, $id)
    {
        $data = $request->validated();
        $data['role'] = $this->role;
        if (empty($data['password']))
        {
            $data['password'] = $request->input('old_password');
        }
        return $this->guruRepos->updateData($data, $id);
    }
    public function handlerDelete($id)
    {
        return $this->guruRepos->hapusData($id);
    }
}
