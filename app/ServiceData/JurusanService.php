<?php

namespace App\ServiceData;
use App\Repos\JurusanRepos;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;
use App\Models\admin\Jurusan;
class JurusanService
{
    private $jurusanRepos;
    /**
     * @param JurusanRepos $jurusanRepos
     */
    public function __construct($jurusan)
    {
        $this->jurusanRepos = new JurusanRepos($jurusan);
    }
    public function handleGetData()
    {
        return $this->jurusanRepos->getAllData();
    }
    public function insertDataJurusan(StoreJurusanRequest $jurusan)
    {
        $data = $jurusan->validated();
        return $this->jurusanRepos->simpanData($data);
    }
    public function updateDataJurusan(UpdateJurusanRequest $jurusan, $id)
    {
        $data = $jurusan->validated();
        return $this->jurusanRepos->updateData($data, $id);
    }
    public function deletDataJurusan($id)
    {
        return $this->jurusanRepos->hapusData($id);
    }
}
