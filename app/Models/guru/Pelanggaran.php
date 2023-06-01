<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $table = "tb_pelanggaran";
    protected $primaryKey = "kode_pelanggaran";
    protected $fillable = ['kode_pelanggaran', 'NIP', 'kode_anggota', 'NISN', 'kode_jenis_kriteria', 'semester', 'tanggal_pelanggaran'];
    public $incrementing = false;
    public $timestamps = false;
}
