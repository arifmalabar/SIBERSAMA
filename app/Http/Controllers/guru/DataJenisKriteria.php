<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Requests\StoreJenisKriteriaRequest;
use App\Http\Requests\StoreKriteriaRequest;
use App\Http\Requests\UpdateJenisKriteriaRequest;
use App\Http\Requests\UpdateKriteriaRequest;
use Illuminate\Http\Request;
use App\ServiceData\JenisKriteriaService;
use App\Models\guru\JenisKriteria;

class DataJenisKriteria extends Controller
{
    private JenisKriteriaService $jenisKriteriaService;
    private DataKriteria $dataKriteria;

    public function __construct()
    {
        $model = new JenisKriteria();
        $this->dataKriteria = new DataKriteria();
        $this->jenisKriteriaService = new JenisKriteriaService($model);
    }

    public function index()
    {
        $data = array(
          "jenis_kriteria" => $this->getDataJeniSKriteria(),
          "kriteria" => $this->dataKriteria->getDataKriteria()
        );
        return TemplateController::templateHandler("guru.jenis_kriteria", $data, "Data Jenis Kriteria");
    }
    public function getDataJeniSKriteria()
    {
        return $this->jenisKriteriaService->handlerGetData();
    }
    public function store(StoreJenisKriteriaRequest $request)
    {
        $query = $this->jenisKriteriaService->handlerInsertData($request);
        if ($query){
            return redirect("/jenis_kriteria")->with('pesan', "berhasil menambah data jenis kriteria");
        }
    }
    public function update(UpdateJenisKriteriaRequest $request, $id)
    {
        $query = $this->jenisKriteriaService->handlerUpdateData($request, $id);
        if ($query){
            return redirect("/jenis_kriteria")->with('pesan', "berhasil mengubdate data jenis kriteria");
        }
    }
    public function destroy($id)
    {
        $query = $this->jenisKriteriaService->handlerDeleteData($id);
        if ($query){
            return redirect("/jenis_kriteria")->with('pesan', "berhasil menghapus data jenis kriteria");
        }
    }
}
