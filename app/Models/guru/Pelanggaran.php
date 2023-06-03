<?php

namespace App\Models\guru;

use App\Models\guru\JenisKriteria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Siswa;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $table = "tb_pelanggaran";
    protected $primaryKey = "kode_pelanggaran";
    protected $fillable = ['kode_pelanggaran', 'NIP', 'kode_anggota', 'NISN', 'kode_jenis_kriteria', 'semester', 'tanggal_pelanggaran'];
    public $incrementing = false;
    public $timestamps = false;
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'NISN', 'NISN');
    }
    public function jenis_kriteria()
    {
        return $this->hasOne(JenisKriteria::class, 'kode_jenis_kriteria', 'kode_jenis_kriteria');
    }
    public function getDates()
    {
        return array('tanggal_pelanggaran');
    }
    public function dt_siswa()
    {
        return $this->hasOne(Siswa::class, 'NISN', 'NISN');
    }
}
