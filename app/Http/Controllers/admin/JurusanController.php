<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Jurusan;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'nama_file_view' => 'admin/main',
            'data_jurusan' => getDataJurusan()
        );
        return view('template/main', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJurusanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJurusanRequest $request)
    {
        $this->validate($request, [
            'nama_jurusan' => 'required',
            'NIP' => 'required',
        ]);
        Jurusan::create([
            'kode_jurusan' => getKdJurusan(),
            'nama_jurusan' => $request->nama_jurusan,
            'NIP' => $request->NIP
        ]);
    }
    private function getKdJurusan() : string
    {
        $tanggal = date('Y-m-d');
        $random = random_int(1, 999);
        $kode_jurusan = $tanggal.' - '.$random;
        return $kode_jurusan;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function getDataJurusan()
    {
        return Jurusan::all();
    }
    private function getIdJurusan(Jurusan $jurusan, $id)
    {
        return $jurusan::find($id);
    }
    
    public function update(UpdateJurusanRequest $request, $id)
    {
        $this->validate($request, [
            'nama_jurusan' => 'required',
            'NIP' => 'required',
        ]);
        $jurusan = getIdJurusan($id);
        $jurusan->kode_jurusan = $request->kode_jurusan;
        $jurusan->nama = $request->nama_jurusan;
        $jurusan->alamat = $request->NIP;
        $jurusan->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = getIdJurusan($id);
        $jurusan->delete();
    }
}
