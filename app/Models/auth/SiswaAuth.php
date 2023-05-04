<?php

namespace App\Models\auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SiswaAuth extends Authenticatable
{
    use HasFactory;
    protected $table = "tb_siswa";
    protected $primaryKey = "NISN";
}
