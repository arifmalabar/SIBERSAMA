<?php

namespace App\ServiceData;
use App\Http\Requests\StorePelanggaranRequest;
use App\Http\Requests\UpdatePelanggaranRequest;
use App\Repos\PelanggaranRepos;
use Illuminate\Support\Facades\Auth;

class PelanggaranService
{
    private PelanggaranRepos $pelanggaranRepos;
    public function __construct($model)
    {
        $this->pelanggaranRepos = new PelanggaranRepos($model);
    }
    public function handlerInsertDataPelanggaran(StorePelanggaranRequest $request)
    {
        $data = $request->validated();
        $data['NIP'] = Auth::guard('guru')->user()->NIP;
        $data['tanggal_pelanggaran'] = date('Y-m-d h:i:s');
        return $this->pelanggaranRepos->simpanData($data);
    }
    public function handlerUpdateDataPelanggaran(UpdatePelanggaranRequest $request, $id)
    {
        $data = $request->validated();
        $data['NIP'] = Auth::guard('guru')->user()->NIP;
        $data['tanggal_pelanggaran'] = date('Y-m-d h:i:s');
        return $this->pelanggaranRepos->updateData($data, $id);
    }
    public function handlerDeletePelanggaran($id)
    {
        return $this->pelanggaranRepos->hapusData($id);
    }
}
