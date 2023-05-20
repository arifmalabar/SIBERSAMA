<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Requests\StoreOperatorRequest;
use App\Http\Requests\UpdateOperatorRequest;
use App\Models\admin\Operator;
use App\ServiceData\OperatorService;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public Operator $operator;
    public OperatorService $operatorService;

    public function __construct()
    {
        $this->operator = new Operator();
        $this->operatorService = new OperatorService($this->operator);
    }

    public function index()
    {
        $data =array(
          "data_operator" => $this->getOperatorData()
        );
        return TemplateController::templateHandler('admin/operator', $data, "Operator");
    }
    function getOperatorData()
    {
        return $this->operatorService->handlerGetData();
    }
    public function store(StoreOperatorRequest $request)
    {
        $query = $this->operatorService->handlerInsertData($request);
        if ($query) {
            return redirect('/operator')->with('pesan', 'berhasil menambah data operator');
        } else{
            return redirect('/operator')->withErrors('pesan', 'gagal menambah data operator');
        }
    }
    public function update(UpdateOperatorRequest $request, $id)
    {
        $query = $this->operatorService-> handlerUpdateData($request,$id);
        if ($query) {
            return redirect('/operator')->with('pesan', 'berhasil mengubah data operator');
        } else{
            return redirect('/operator')->withErrors('pesan', 'gagal mengubah data operator');
        }
    }
    public function destroy($id)
    {
        $query = $this->operatorService->handlerDelete($id);
        if ($query) {
            return redirect('/operator')->with('pesan', 'berhasil menghapus data operator');
        } else{
            return redirect('/operator')->withErrors('pesan', 'gagal mengahpus data operator');
        }
    }
}
