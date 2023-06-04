<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = "tb_kriteria";
    protected $primaryKey = "kode_kriteria";
    protected $fillable = ['kode_kriteria', 'nama_kriteria'];
    public $incrementing = false;
    public $timestamps = false;
    public function jenis_kriteria()
    {
        return $this->belongsTo(JenisKriteria::class, 'kode_kriteria', 'kode_kriteria');
    }
    public function jenisk()
    {
        return $this->hasMany(JenisKriteria::class, 'kode_kriteria', 'kode_kriteria');
    }

}
