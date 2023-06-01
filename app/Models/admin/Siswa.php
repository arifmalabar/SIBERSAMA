<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Kelas;
use App\Models\guru\MPK;

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
}
