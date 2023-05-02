<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Kelas;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = "tb_jurusan";
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kode_jurusan', 'kode_jurusan');
    }
}
