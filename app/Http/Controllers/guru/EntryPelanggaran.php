<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Requests\StorePelanggaranRequest;
use App\Http\Requests\UpdatePelanggaranRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\SiswaController;
use App\Http\Controllers\guru\SemesterController;
use App\ServiceData\PelanggaranService;
use App\Models\guru\Pelanggaran;

class EntryPelanggaran extends SiswaController
{
    private DataKriteria $dataKriteria;
    private SemesterController $semesterController;
    private PelanggaranService $pelanggaranService;
    private Pelanggaran $pelanggaran;
    public function __construct()
    {
        parent::__construct();
        $this->dataKriteria = new DataKriteria();
        $this->semesterController = new SemesterController();
        $this->pelanggaran = new Pelanggaran();
        $this->pelanggaranService = new PelanggaranService($this->pelanggaran);
    }

    public function index($id)
    {
        $data = array(
            "data_siswa" => $this->getDataSiswa(),
            "data_kriteria" => $this->dataKriteria->getDataKriteria(),
            "data_semester" => $this->semesterController->getDataSemester(),
            "id" => $id
        );
        return TemplateController::templateHandler("guru.entry_pelanggaran", $data, "Entry Pelanggaran");
    }
    public function halamanEntry($nisn)
    {
        $data = array(
            "data_kriteria" => $this->dataKriteria->getDataKriteria(),
            "data_semester" => $this->semesterController->getDataSemester()
        );
        return TemplateController::templateHandler("guru.halaman_entry_pelanggar", $data, "Entry Pelanggaran");
    }
    public function entryPelanggaran(StorePelanggaranRequest $request, $id)
    {
        $query = $this->pelanggaranService->handlerInsertDataPelanggaran($request);
        if ($query){
            return redirect('entry_pelaggaran/'.id)->with('pesan', 'berhasil menambah data pelanggaran');
        }
    }
    public function updatePelanggaran(UpdatePelanggaranRequest $request)
    {

    }
    public function hapusPelanggaran($id)
    {
    }
}
