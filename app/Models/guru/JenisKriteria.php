<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKriteria extends Model
{
    use HasFactory;
    protected $table = "tb_jenis_kriteria";
    protected $primaryKey = "kode_jenis_kriteria";
    protected $fillable = ['kode_jenis_kriteria', 'kode_kriteria', 'jenis_kriteria', 'bobot_poin'];
    public $incrementing = false;
    public $timestamps = false;
    public function kriteria()
    {
        return $this->hasOne(Kriteria::class, "kode_kriteria", "kode_kriteria");
    }
    public function haskriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kode_kriteria', 'kode_kriteria');
    }
    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class, 'kode_jenis_kriteria', 'kode_jenis_kriteria');
    }
}
