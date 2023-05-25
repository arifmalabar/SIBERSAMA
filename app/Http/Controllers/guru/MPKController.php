<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Requests\StoreMPKRequest;
use App\Http\Requests\UpdateMPKRequest;
use App\Models\guru\MPK;
use App\ServiceData\MPKService;

class MPKController extends Controller
{
    private MPKService $mpkservice;

    public function __construct()
    {
        $model = new MPK();
        $this->mpkservice = new MPKService($model);
    }
    public function index()
    {
        $data = array(
            "data_mpk" => $this->getDataMPK()
        );
        TemplateController::templateHandler("guru/mpk", $data, "Data MPK");
    }
    public function getDataMPK()
    {
        return $this->mpkservice->getMPKData();
    }
    public function store(StoreMPKRequest $request)
    {
        $query = $this->mpkservice->handlerInsertData($request);
        if ($query){
            return redirect('/datampk')->with('pesan', 'berhasil menambah data MPK');
        }
    }
    public function update(UpdateMPKRequest $request, $id)
    {
        $query = $this->mpkservice->handlerUpdateData($request, $id);
        if ($query){
            return redirect('/datampk')->with('pesan', 'berhasil mengubah data MPK');
        }
    }
    public function destroy($id)
    {
        $query = $this->mpkservice->handlerDeleteData($id);
        if ($query){
            return redirect('/datampk')->with('pesan', 'berhasil menghapus data MPK');
        }
    }
}
