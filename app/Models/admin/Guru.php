<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "tb_guru";
    protected $primaryKey = "NIP";
    protected $fillable = ['NIP', 'nama', 'username', 'password', 'role', 'last_access', 'kd_jabatan', 'kode_pangkat'];
    public $timestamps = false;
}
