<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Models\admin\Jabatan;
use App\ServiceData\GuruService;
use PDF;

class GuruController extends Controller
{
    private GuruService $guruService;
    private KepangkatanController $kepangkatanController;
    private JabatanController $jabatanController;

    /**
     * @param GuruService $guruService
     */
    public function __construct()
    {
        $model = new Guru();
        $this->guruService = new GuruService($model);
        $this->jabatanController = new JabatanController();
        $this->kepangkatanController = new KepangkatanController();
    }

    public function index()
    {
        $data = array(
            'data_guru' => $this->getDataGuru(),
            'data_pangkat' => $this->kepangkatanController->getPangkat(),
            'data_jabatan' => $this->jabatanController->getJabatan(),
        );
        return TemplateController::templateHandler("admin/guru", $data, "Guru");
        //dd($data);
    }

    public function getDataGuru()
    {
        return $this->guruService->handlerGetData();
    }

    public function store(StoreGuruRequest $request)
    {
        $query = $this->guruService->handlerInsertData($request);
        if($query){
            return redirect('/dataguru')->with('pesan', 'Data guru berhasil di input');
        } else {
            return redirect('/dataguru')->withErrors('errmsg', 'gagal tambah data');
        }
    }

    public function update(UpdateGuruRequest $request, $id)
    {
        $query = $this->guruService->handlerUpdateData($request, $id);
        if($query){
            return redirect('/dataguru')->with('pesan', 'Data berhasil diubah');
        } else {
            return redirect('/dataguru')->withErrors('errmsg', 'Gagal update data');
        }
    }

    public function destroy($id)
    {
        $query = $this->guruService->handlerDelete($id);
        if($query){
            return redirect('/dataguru')->with('pesan', 'Data berhasil dihapus');
        } else {
            return redirect('/dataguru')->withErrors('errmsg', 'Gagal hapus data');
        }
    }
    public function reportGuru()
    {
        $data = array(
            'data_guru' => $this->getDataGuru(),
        );
        $pdf = PDF::loadview('export/export_guru',$data);
        return $pdf->download('data guru.pdf');
    }
}
