<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\JabatanController;
use App\Http\Controllers\admin\KepangkatanController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\StoreKepalaSekolahRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Http\Requests\UpdateKepalaSekolahRequest;
use App\Models\admin\KepalaSekolah;
use App\ServiceData\KepalaSekolahService;
use App\Models\admin\Guru;
class KepalaSekolahController extends Controller
{
    private KepalaSekolahService $kepalaSekolahService;
    private $model;
    private KepangkatanController $kepangkatanController;
    private JabatanController $jabatanController;
    public function __construct()
    {
        $this->model = new Guru();
        $this->kepalaSekolahService = new KepalaSekolahService($this->model);
        $this->jabatanController = new JabatanController();
        $this->kepangkatanController = new KepangkatanController();
    }

    public function index()
    {
        $data = array(
            "data_kepsek" => $this->getDataKepsek(),
            'data_pangkat' => $this->kepangkatanController->getPangkat(),
            'data_jabatan' => $this->jabatanController->getJabatan(),
        );
        return TemplateController::templateHandler("admin/kepala_sekolah", $data, "Kepala Sekolah");
    }
    public function getDataKepsek()
    {
        return $this->kepalaSekolahService->handlerGetData();
    }
    public function store(StoreGuruRequest $request)
    {
        $query = $this->kepalaSekolahService->handlerInsertData($request);
        if ($query)
        {
            return redirect('/kepalasekolah')->with('pesan', 'berhasil menginput data');
        }
    }
    public function update(UpdateGuruRequest $request, $id)
    {
        $query = $this->kepalaSekolahService->handlerUpdateData($request, $id);
        if ($query)
        {
            return redirect('/kepalasekolah')->with('pesan', 'berhasil mengubah data');
        }
    }
    public function destroy($id)
    {
        $query = $this->kepalaSekolahService->handlerDelete($id);
        if ($query)
        {
            return redirect('/kepalasekolah')->with('pesan', 'berhasil menghapus data');
        }
    }
}
