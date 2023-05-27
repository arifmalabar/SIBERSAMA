<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MPK extends Model
{
    use HasFactory;
    protected $table = "tb_mpkosis";
    protected $primaryKey = "kode_anggota";
    protected $fillable = ['kode_anggota', 'NISN', 'tahun_periode_aktif', 'tahun_periode_non'];
    public $incrementing = false;
    public $timestamps = false;
}
