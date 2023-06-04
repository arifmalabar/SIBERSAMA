<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Requests\StoreKriteriaRequest;
use App\Http\Requests\UpdateKriteriaRequest;
use App\ServiceData\KriteriaService;
use App\Models\guru\Kriteria;
use Illuminate\Http\Request;
use PDF;

class DataKriteria extends Controller
{
    private KriteriaService $kriteriaService;
    public function __construct()
    {
        $model= new Kriteria();
        $this->kriteriaService = new KriteriaService($model);
    }

    public function index()
    {
        $data = array(
            "data_kriteria" => $this->getDataKriteria()
        );
        return TemplateController::templateHandler("guru.kriteria", $data, "Data Kriteria");
    }
    public function exportKriteria()
    {
        $data = array(
            "data_kriteria" => $this->getDataKriteria()
        );
        $pdf = PDF::loadview('export/export_kriteria',$data);
        return $pdf->download('data kriteria.pdf');
    }
    public function getDataKriteria()
    {
        return $this->kriteriaService->handlerGetData();
    }
    public function store(StoreKriteriaRequest $request)
    {
        $query = $this->kriteriaService->handlerInsertData($request);
        if ($query){
            return redirect("/kriteria")->with('pesan', "berhasil menambah data kriteria");
        }
    }
    public function update(UpdateKriteriaRequest $request, $id)
    {
        $query = $this->kriteriaService->handlerUpdateData($request, $id);
        if ($query){
            return redirect("/kriteria")->with('pesan', "berhasil mengubah data kriteria");
        }
    }
    public function destroy($id)
    {
        $query = $this->kriteriaService->handlerDeleteData($id);
        if ($query){
            return redirect("/kriteria")->with('pesan', "berhasil menghapus data kriteria");
        }
    }
}
