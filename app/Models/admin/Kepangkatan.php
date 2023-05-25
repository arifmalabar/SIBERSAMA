<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepangkatan extends Model
{
    use HasFactory;
    protected $table = "tb_kepangkatan";
    protected $primaryKey = "kode_pangkat";
    public $incrementing = false;
    protected $fillable = ['kode_pangkat', 'pangkat'];
    public $timestamps = false;
}
