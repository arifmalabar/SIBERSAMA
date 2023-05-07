<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Jabatan;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IdBuilder;
use Illuminate\Support\Str;

class JabatanController extends Controller
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
    public function jabatanTable()
    {

        return view('admin/table/table_jabatan', $data);
    }
    public static function getJabatan()
    {
        return Jabatan::all();
    }
    public function store(StoreJabatanRequest $request)
    {
        $request->validate([
            'nama_jabatan' => 'required'
        ]);
        Jabatan::create([
            "kode_jabatan" => IdBuilder::getId(Kepangkatan::class, "kd_jabatan","PK"),
            "nama_jabatan" => $request->nama_jabatan
        ]);
        return view('admin/table/table_jabatan', $data);
    }

    public function update(UpdateJabatanRequest $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required'
        ]);
        $jabatan = Jabatan::find($id);
        $pegawai->nama_jabatan = $request->nama_jabatan;
        $jabatan->save();
        return view('admin/table/table_jabatan', $data);
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return view('admin/table/table_jabatan', $data);
    }
}
