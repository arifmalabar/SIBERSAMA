<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Requests\StorePereferensiRequest;
use App\Http\Requests\UpdatePereferensiRequest;
use App\Models\guru\Pereferensi;
use App\ServiceData\PereferensiService;
use Illuminate\Http\Request;

class DataPereferensi extends Controller
{
    private PereferensiService $pereferensiService;

    public function __construct()
    {
        $model = new Pereferensi();
        $this->pereferensiService = new PereferensiService($model);
    }

    public function index()
    {
        $data = array("data_pereferensi" => $this->getDataPereferensi());
        return TemplateController::templateHandler("guru.pereferensi", $data, "Data Pereferensi");
    }
    public function getDataPereferensi()
    {
        return $this->pereferensiService->handlerGetData();
    }
    public function store(StorePereferensiRequest $request)
    {
        $query = $this->pereferensiService->handlerInsertData($request);
        if ($query){
            return redirect("/pereferensi")->with('pesan', "berhasil menambah data kriteria");
        }
    }
    public function update(UpdatePereferensiRequest $request, $id)
    {
        $query = $this->pereferensiService->handlerUpdateData($request, $id);
        if ($query){
            return redirect("/pereferensi")->with('pesan', "berhasil mengubah data kriteria");
        }
    }
    public function destroy($id)
    {
        $query = $this->pereferensiService->handlerDeleteData($id);
        if ($query){
            return redirect("/pereferensi")->with('pesan', "berhasil menghapus data kriteria");
        }
    }
}
