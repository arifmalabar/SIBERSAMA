<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Kepangkatan;
use App\Http\Requests\StoreKepangkatanRequest;
use App\Http\Requests\UpdateKepangkatanRequest;
use App\Http\Controllers\IdBuilder;
use App\Http\Controllers\Controller;

class KepangkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $data = array();
    function __construct()
    {
        $data = array(
            'data_pangkat' => getPangkat(),
            'no' => 1
        );
    }
    public function tableData()
    {
        return view('admin/table/table_pangkat', $data);
    }
    public static function getPangkat() 
    {
        return Kepangkatan::all();
    }
    
    public function store(StoreKepangkatanRequest $request)
    {
        $request->validate([
            "nama_pangkat" => "required"
        ]);
        Kepangkatan::create([
            "kode_pangkat" => IdBuilder::getId(Kepangkatan::class, "kode_pangkat","PK"),
            "pangkat" => $request->nama_pangkat
        ]);
        return view('admin/table/table_pangkat', $data);
    }

    public function update(UpdateKepangkatanRequest $request, $id)
    {
        $request->validate([
            "nama_pangkat" => "required"
        ]);
        $kepangkatan = Kepangkatan::find($id);
        $kepangkatan->pangkat = $request->nama_pangkat;
        $kepangkatan->save();
        return view('admin/table/table_pangkat', $data);
    }

    public function destroy(Kepangkatan $kepangkatan)
    {
        $kepangkatan = Kepangkatan::find($id);
        $kepangkatan->delete();
        return view('admin/table/table_pangkat', $data);
    }
}
