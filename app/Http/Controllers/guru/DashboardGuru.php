<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Models\guru\Semester;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use App\ServiceData\SemesterService;
use App\Http\Controllers\guru\DataKriteria;
use App\Http\Controllers\guru\DataJenisKriteria;
use App\Http\Controllers\guru\MPKController;
use App\Http\Controllers\PelanggaranController;

class DashboardGuru extends Controller
{
    private SemesterService $semesterService;
    private DataKriteria $dataKriteria;
    private DataJenisKriteria $dataJenisKriteria;
    private MPKController $MPKController;
    private PelanggaranController $pelanggaranController;

    public function __construct()
    {
        $model  = new Semester();
        $this->semesterService = new SemesterService($model);
        $this->dataKriteria = new DataKriteria();
        $this->dataJenisKriteria = new DataJenisKriteria();
        $this->MPKController = new MPKController();
        $this->pelanggaranController = new PelanggaranController();
    }

    public function index()
    {
        $data = array(
            "data_pangkat" => $this->semesterService->getDataSemester(),
            "kriteria" => $this->countKriteria(),
            "akunMPK" => $this->countAkunMPK(),
            "jenis_kriteria" => $this->countJenisKriteria()
        );
        return TemplateController::templateHandler("guru/main", $data, "Dashboard");
    }
    public function countJenisKriteria()
    {
        return count($this->dataJenisKriteria->getDataJeniSKriteria());
    }
    public function countAkunMPK()
    {
        return count($this->dataJenisKriteria->getDataJeniSKriteria());
    }
    public function countkriteria()
    {
        return count($this->dataKriteria->getDataKriteria());
    }
    public function sumPelanggaran($status)
    {

    }
}
