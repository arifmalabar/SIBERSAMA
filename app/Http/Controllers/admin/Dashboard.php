<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Models\admin\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\KepangkatanController;
use App\Http\Controllers\admin\JabatanController;

class Dashboard extends Controller
{
    private $jurusan, $kelas;

    /**
     * @param $jurusan
     */
    public function __construct()
    {
        $this->jurusan = new JurusanController();
        $this->kelas = new KelasController();
    }

    public function main()
    {
        $data = array(
            'kepangkatan' => KepangkatanController::getPangkat(),
            'jabatan' => JabatanController::getjabatan(),
        );
        return TemplateController::templateHandler("admin/main", $data, "Dashboard");
    }
}
