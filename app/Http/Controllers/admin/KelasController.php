<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Jurusan;
use App\Models\admin\Kelas;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Http\Controllers\admin\JurusanController;
use App\ServiceData\KelasService;
use App\Http\Controllers\Pesan;

class KelasController extends Controller
{
    private $jurusan, $kelas_service, $model;

    /**
     * @param $jurusan
     */
    public function __construct()
    {
        $this->model = new Kelas();
        $this->jurusan = new JurusanController();
        $this->kelas_service = new KelasService($this->model);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            "judul" => "Kelas",
            "data_kelas" => $this->kelas_service->handlerGetData(),
            "data_jurusan" => $this->jurusan->getDataJurusan()
        );
        return view("admin.kelas", $data);
    }


    public function store(StoreKelasRequest $request)
    {
        $query = $this->kelas_service->handlerTambahData($request);
        if($query)
        {
            return Pesan::pesanBerhasil("/kelas", "pesan", "berhasil menyimpan data");
        } else {
            return Pesan::pesanGagal("/kelas", "pesan", "Gagal menyimpan data");
        }
    }

    public function update(UpdateKelasRequest $request, $id)
    {
        $query = $this->kelas_service->hanlderEditData($request, $id);
        if($query)
        {
            return Pesan::pesanBerhasil("/kelas", "pesan", "berhasil mengubah data");
        } else {
            return Pesan::pesanGagal("/kelas", "pesan", "Gagal mengubah data");
        }
    }

    public function destroy($id)
    {
        $query = $this->kelas_service->handlerDeleteData($id);
        if($query)
        {
            return Pesan::pesanBerhasil("/kelas", "pesan", "berhasil menghapus data");
        } else {
            return Pesan::pesanGagal("/kelas", "pesan", "Gagal menghapus data");
        }
    }

}
