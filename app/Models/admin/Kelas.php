<?php

namespace App\Models\admin;

use App\Models\admin\Siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Jurusan;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "tb_kelas";
    protected $fillable = ["kode_kelas", "kode_jurusan", "nama_kelas"];
    protected $primaryKey = "kode_kelas";
    public $timestamps = false;
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'kode_kelas', 'kode_kelas');
    }
    public function jurusan()
    {
        return $this->hasOne(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
    }
    public function dt_siswa()
    {
        return $this->hasMany(Siswa::class, 'kode_kelas', 'kode_kelas');
    }
}
