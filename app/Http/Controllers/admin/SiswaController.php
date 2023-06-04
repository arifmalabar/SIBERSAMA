<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\TemplateController;
use App\Models\admin\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Http\Controllers\Controller;
use App\ServiceData\SiswaService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\KelasController;
use PDF;

class SiswaController extends Controller
{

    private SiswaService $siswaService;
    private Siswa $model;
    public $id;
    private $kelas;
    public function __construct()
    {
        $this->id = Route::current()->parameter('id');
        $this->model = new Siswa();
        $this->siswaService = new SiswaService($this->model, $this->id);
        $this->kelas = new KelasController();
    }

    public function index($id)
    {
        $data = array(
            "data_siswa" => $this->getDataSiswa(),
            "data_kelas" => $this->kelas->getDataKelas(),
            "id" => $id,
            "kelas" => $this->getKelas()
        );
        return TemplateController::templateHandler("admin/siswa", $data, "Siswa");
    }
    public function getKelas()
    {
        $data = $this->getDataSiswa();
        $kelas = "";
        foreach ($data as $dt){
            $kelas = $dt->kelas->nama_kelas;
        }
        return $kelas;
    }
    public function getDataSiswa()
    {
        return $this->siswaService->handlerGetData();
    }
    public function getDataWithID($nisn)
    {
        return $this->siswaService->handlerGetDataWithNISN($nisn);
    }
    public function getDataWithoutID()
    {
        return $this->siswaService->handlerGetDataWithoutID();
    }
    public function store(StoreSiswaRequest $request)
    {
        $query = $this->siswaService->handlerInsertData($request);
        if ($query)
        {
            return redirect('/siswa/'.$this->id)->with('pesan', 'Berhasil menambah data');
        } else {
            return redirect('/siswa/'.$this->id)->withErrors('pesan', 'Berhasil menambah data');
        }
    }
    public function update(UpdateSiswaRequest $request, $id, $nisn)
    {
        $query = $this->siswaService->handlerUpdateData($request, $nisn);
        if ($query)
        {
            return redirect('/siswa/'.$this->id)->with('pesan', 'Berhasil mengubah data');
        } else {
            return redirect('/siswa/'.$this->id)->withErrors('pesan', 'Berhasil menambah data');
        }
    }
    public function destroy($id, $nisn)
    {
        $query = $this->siswaService->handlerDeleteData($nisn);
        if ($query)
        {
            return redirect('/siswa/'.$this->id)->with('pesan', 'Berhasil mengahpus data');
        } else {
            return redirect('/siswa/'.$this->id)->withErrors('pesan', 'gagal hapus data');
        }
    }
    public function reportSiswa($id)
    {
        $data = array(
            "data_siswa" => $this->getDataSiswa(),
            "kelas" => $this->getKelas(),
            "id" => $id
        );
        $pdf = PDF::loadview('export/export_siswa',$data);
        return $pdf->download('data kelas'.$this->getKelas().'.pdf');
    }
}
