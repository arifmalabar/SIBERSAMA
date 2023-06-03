<?php

namespace App\Http\Controllers;

use App\Http\Controllers\guru\SemesterController;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\KelasController;

class TemplateController extends Controller
{
    public static function templateHandler($nama_view, $data, $judul)
    {
        $kelas = new KelasController();
        $semester = new SemesterController();
        $data['judul'] = $judul == "" ? "" : $judul;
        $data["data_kelas_ul"] = $kelas->getDataKelas();
        $data['semester_ul'] = $semester->getDataSemester();
        return view($nama_view, $data);
    }
}
