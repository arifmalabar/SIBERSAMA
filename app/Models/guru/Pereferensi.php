<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pereferensi extends Model
{
    use HasFactory;
    protected $table = "tb_pereferensi";
    protected $primaryKey = "kode_pereferensi";
    protected $fillable = ['keterangan', 'bobot_nilai'];
    public $incrementing = false;
    public $timestamps = false;
}
