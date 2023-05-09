<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pesan extends Controller
{
    public static function pesanBerhasil($route, $sessid,$pesan)
    {
        return redirect($route)->with($sessid, $pesan);
    }
    public static function pesanGagal($route, $sessid, $pesan)
    {
        return redirect($route)->with($sessid, $pesan);
    }
}
