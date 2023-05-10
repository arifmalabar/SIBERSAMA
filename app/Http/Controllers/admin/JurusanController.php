<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\TemplateController;
use App\Models\admin\Jurusan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;
use App\Repos\JurusanRepos;
use App\ServiceData\JurusanService;


class JurusanController extends Controller
{

    /**
     * @param BaseRepos $repos
     */
    private JurusanService $jurusanService;
    public function __construct()
    {
        $jurusan = new Jurusan();
        $this->jurusanService = new JurusanService($jurusan);
    }

    /**
     * @param JurusanRepos $repos
     */

    public function index()
    {
        $data = array(
            'judul' => "Jurusan",
            'nama_file_view' => 'admin/jurusan',
            'data_jurusan' => $this->getDataJurusan()
        );
        return TemplateController::templateHandler("admin/jurusan", $data, "Jurusan");
    }

    public function store(StoreJurusanRequest $request)
    {
        $query = $this->jurusanService->insertDataJurusan($request);
        if($query){
            return redirect('/jurusan')->with('pesan', 'Berhasil menambah data');
        } else {
            return redirect('/jurusan')->withErrors('errmsg', 'gagal hapus data');
        }
    }
    public function getDataJurusan()
    {
        return $this->jurusanService->handleGetData();
    }
    public function update(UpdateJurusanRequest $request, $id)
    {
        $query = $this->jurusanService->updateDataJurusan($request, $id);
        if($query)
        {
            return redirect('/jurusan')->with('pesan', 'berhasil update data');
        } else {
            return redirect('/jurusan')->withErrors('errmsg', 'gagal update data');
        }
    }

    public function destroy($id)
    {
        $query = $this->jurusanService->deletDataJurusan($id);
        if($query){
            return redirect('/jurusan')->with('pesan', 'berhasil tambah data');
        } else {
            return redirect('/jurusan')->withErrors('errmsg', 'gagal hapus data');
        }
    }
}
