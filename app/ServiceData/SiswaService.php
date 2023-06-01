<?php

namespace App\ServiceData;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Models\admin\Siswa;
use App\Repos\SiswaRepos;

class SiswaService
{
    private SiswaRepos $siswaRepos;
    private $kode_kelas;

    /**
     * @param SiswaRepos $siswaRepos
     */
    public function __construct($model, $kode_kelas)
    {
        $this->kode_kelas = $kode_kelas;
        $this->siswaRepos = new SiswaRepos($model, $this->kode_kelas);
    }
    public function handlerGetDataWithoutID()
    {
        return $this->siswaRepos->getAllDataWithoutID();
    }
    public function handlerGetDataWithNISN($nisn)
    {
        return $this->siswaRepos->getAllDataWithNISN($nisn);
    }
    public function handlerGetData()
    {
        return $this->siswaRepos->getAllData();
    }
    public function handlerInsertData(StoreSiswaRequest $request)
    {
        $data = $request->validated();
        $data['kode_kelas'] = $this->kode_kelas;
        $data['password'] = bcrypt($request->password);
        return $this->siswaRepos->simpanData($data);
    }
    public function handlerUpdateData(UpdateSiswaRequest $request, $nisn)
    {
        $data = $request->validated();
        if(empty($request->password)){
            $data['password'] = $request->old_password;
        }
        return $this->siswaRepos->updateData($data, $nisn);
    }
    public function handlerDeleteData($id)
    {
        return $this->siswaRepos->hapusData($id);
    }
}
