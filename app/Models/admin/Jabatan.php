<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = "tb_jabatan";
    public $primaryKey = "kd_jabatan";
    public $incrementing = false;
    protected $fillable = ['kd_jabatan', 'nama_jabatan'];
    public $timestamps = false;
}
