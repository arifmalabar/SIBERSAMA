<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\admin\KelasController;

class TemplateController extends Controller
{
    public static function templateHandler($nama_view, $data, $judul)
    {
        $kelas = new KelasController();
        $data['judul'] = $judul == "" ? "" : $judul;
        $data["data_kelas_ul"] = $kelas->getDataKelas();
        return view($nama_view, $data);
    }
}
