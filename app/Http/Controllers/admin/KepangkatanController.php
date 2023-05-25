<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Kepangkatan;
use App\Http\Requests\StoreKepangkatanRequest;
use App\Http\Requests\UpdateKepangkatanRequest;
use App\Http\Controllers\IdBuilder;
use App\Http\Controllers\Controller;
use App\ServiceData\PangkatService;
use Illuminate\Support\Str;

class KepangkatanController extends Controller
{
    private PangkatService $pangkatService;

    private $data = array();
    function __construct()
    {
        $model = new Kepangkatan();
        $this->pangkatService = new PangkatService($model);
        $data = array(
            'data_pangkat' => $this->getPangkat(),
            'no' => 1
        );
    }
    public function tableData()
    {
        return view('admin/table/table_pangkat', $data);
    }
    public function getPangkat()
    {
       return $this->pangkatService->handlerGetData();
    }
    public function store(StoreKepangkatanRequest $request)
    {
        $query = $this->pangkatService->handlerInsertData($request);
        if ($query)
        {
            return redirect('/admin')->with('pesan', 'berhasil menambah data');
        }
    }
    public function update(UpdateKepangkatanRequest $request, $id)
    {
        $query = $this->pangkatService->handlerUpdateData($request, $id);
        if ($query)
        {
            return redirect('/admin')->with('pesan', 'berhasil mengubah data');
        }
    }
    public function destroy($id)
    {
        $query = $this->pangkatService->handlerDeleteData($id);
        if ($query)
        {
            return redirect('/admin')->with('pesan', 'berhasil menghapus data');
        }
    }
}
