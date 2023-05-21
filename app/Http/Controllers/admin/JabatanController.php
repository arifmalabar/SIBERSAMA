<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Jabatan;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IdBuilder;
use Illuminate\Support\Str;
use App\ServiceData\JabatanService;

class JabatanController extends Controller
{
    private $data = array();
    private Jabatan $jabatan;
    private JabatanService $jabatanService;
    function __construct()
    {
        $this->jabatan = new Jabatan();
        $this->jabatanService = new JabatanService($this->jabatan);
        $data = array(
            'no' => 1
        );
    }
    public function jabatanTable()
    {
        return view('admin/table/table_jabatan', $data);
    }
    public function getJabatan()
    {
        return $this->jabatanService->handlerGetData();
    }
    public function store(StoreJabatanRequest $request)
    {
        $query = $this->jabatanService->handlerInsertData($request);
        if ($query){
            return redirect('admin/')->with('pesan', 'berhasil menambah data jabatan');
        }
    }
    public function update(UpdateJabatanRequest $request, $id)
    {
        $query = $this->jabatanService->handlerUpdateData($request, $id);
        if ($query){
            return redirect('admin/')->with('pesan', 'berhasil mengubah data jabatan');
        }
    }

    public function destroy($id)
    {
        $query = $this->jabatanService->handlerDeleteData($id);
        if ($query){
            return redirect('admin/')->with('pesan', 'berhasil menghapus data jabatan');
        }
    }
}
