<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Kelas;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = "tb_jurusan";
    protected $fillable = ['nama_jurusan'];
    protected $primaryKey = "kode_jurusan";
    public $timestamps = false;
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kode_jurusan', 'kode_jurusan');
    }
}
