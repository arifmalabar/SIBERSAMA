<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Siswa;
use App\Models\admin\Jurusan;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "tb_kelas";
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'kode_kelas', 'kode_kelas');
    }
    public function jurusan()
    {
        return $this->hasOne(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
    }
}
