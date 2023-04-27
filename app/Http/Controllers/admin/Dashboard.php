<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function main()
    {
        $data = array(
            'nama_file_view' => 'admin/main',
        );
        return view('admin/main', $data);
    }
}
