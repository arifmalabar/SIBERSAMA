<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\KepangkatanController;
use App\Http\Controllers\admin\JabatanController;

class Dashboard extends Controller
{
    public function main()
    {
        $data = array(
            'judul' => 'Dashboard',
            'nama_file_view' => 'admin/main',
            'kepangkatan' => KepangkatanController::getPangkat(),
            'jabatan' => JabatanController::getjabatan()
        );
        return view('admin/main', $data);
    }
}
