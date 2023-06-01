<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Siswa;
use App\Models\guru\JenisKriteria;

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
}
