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
    public function getSiswaByKriteria($nisn, $kode_kriteria)
    {
        return $data = $this->pelanggaranService->getSiswaByKriteria($nisn);
    }
    public function halamanRiwayat($nisn)
    {
        $data = array(
            "NISN" => $nisn,
            "data_siswa" => $this->getDataWithID($nisn),
            "jml_bobot" => $this->countPoinPelanggaran($nisn),
            "data_semester" => $this->semesterController->getDataSemester(),
            "data_kriteria" => $this->dataKriteria->getDataKriteria(),
        );
        return TemplateController::templateHandler("guru.riwayat_pelanggaran", $data, "Riwayat Pelanggaran");
    }
    public function entryPelanggaran(StorePelanggaranRequest $request, $id)
    {
        $query = $this->pelanggaranService->handlerInsertDataPelanggaran($request);
        if ($query){
            return redirect('/riwayat_pelanggaran/'.$id)->with('pesan', 'berhasil mengubah data pelanggaran');
        }
    }
    public function countPoinPelanggaran($nisn)
    {
        $bobot = 0;
        foreach ($this->getDataWithID($nisn) as $s)
        {
            foreach ($s->data_pelanggar as $d)
            {
                $bobot += $d->jenis_kriteria->bobot_poin;
            }
        }
        return $bobot;
    }
    public function updatePelanggaran(UpdatePelanggaranRequest $request, $id, $nisn)
    {
        $query = $this->pelanggaranService->handlerUpdateDataPelanggaran($request, $id);
        if ($query){
            return redirect('/riwayat_pelanggaran/'.$nisn)->with('pesan', 'berhasil menambah data pelanggaran');
        }
    }
    public function hapusPelanggaran($id, $nisn)
    {
        $query = $this->pelanggaranService->handlerDeletePelanggaran($id);
        if ($query){
            return redirect('/riwayat_pelanggaran/'.$nisn)->with('pesan', 'berhasil menambah data pelanggaran');
        }
    }
}
