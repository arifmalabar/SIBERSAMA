<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\Siswa;
use App\Models\admin\Kelas;

class Tes extends Controller
{
    public function index()
    {
        $data = Siswa::all();
        foreach ($data as $key) {
            echo $key->kelas->nama_kelas;
            echo "<br>".$key->kelas->jurusan->nama_jurusan;
        }
    }
}
