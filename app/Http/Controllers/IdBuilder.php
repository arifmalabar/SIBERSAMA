<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdBuilder extends Controller
{
    public static function getId($model, $id, $first)
    {
        $lastid = $model->select($id)->orderBy($id, 'desc')->first();
        $data_id = explode("-", $lastid);
        $new_id = $first."".(int)$data_id+1;
        return $new_id;
    }
}
