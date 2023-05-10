<?php

namespace App\Models\auth;

use App\Models\admin\Kelas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SiswaAuth extends Authenticatable
{
    use HasFactory;
    protected $table = "tb_siswa";
    protected $primaryKey = "NISN";
    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'kode_kelas', 'kode_kelas');
    }
}
