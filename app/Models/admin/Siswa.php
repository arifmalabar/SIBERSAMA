<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Kelas;
use App\Models\guru\MPK;
use App\Models\guru\Pelanggaran;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "tb_siswa";
    protected $primaryKey = "NISN";
    public $incrementing = false;
    protected $fillable = ["nisn", "nama_siswa", "kode_kelas", "jenis_kelamin", "username", "password"];
    public $timestamps = false;
    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'kode_kelas', 'kode_kelas');
    }
    public function mpk()
    {
        return $this->belongsTo(MPK::class, 'NISN', 'NISN');
    }
    public function dt_kelas()
    {
        return $this->belongsTo(Kelas::class, 'kode_kelas', 'kode_kelas');
    }
    public function data_pelanggar()
    {
        return $this->hasMany(Pelanggaran::class, 'NISN', 'NISN');
    }
}
