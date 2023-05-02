<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Kelas;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "tb_siswa";
    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'kode_kelas', 'kode_kelas');
    }
}
