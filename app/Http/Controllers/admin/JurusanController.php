<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Jurusan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;


class JurusanController extends Controller
{
    public function index()
    {
        $data = array(
            'judul' => "Jurusan",
            'nama_file_view' => 'admin/jurusan',
            'data_jurusan' => $this->getDataJurusan()
        );
        return view('admin/jurusan', $data);
    }

    public function store(StoreJurusanRequest $request)
    {
        $query = Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan,
            'NIP' => $request->NIP
        ]);
        if($query){
            return redirect('/jurusan')->with('pesan', 'Berhasil menambah data');
        } else {
            return redirect('/jurusan')->withErrors('errmsg', 'gagal hapus data');
        }
    }
    public function getDataJurusan()
    {
        return Jurusan::all();
    }
    private function getIdJurusan($id)
    {
        return Jurusan::find($id);
    }

    public function update(UpdateJurusanRequest $request, $id)
    {
        $jurusan = $this->getIdJurusan($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->save();
        if($jurusan)
        {
            return redirect('/jurusan')->with('pesan', 'berhasil update data');
        } else {
            return redirect('/jurusan')->withErrors('errmsg', 'gagal update data');
        }
    }

    public function destroy($id)
    {
        $jurusan = $this->getIdJurusan($id);
        $jurusan->delete();
        if($jurusan){
            return redirect('/jurusan')->with('pesan', 'berhasil tambah data');
        } else {
            return redirect('/jurusan')->withErrors('errmsg', 'gagal hapus data');
        }
    }
}
