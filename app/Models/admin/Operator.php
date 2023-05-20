<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    protected $table = "tb_operator";
    protected $primaryKey = "NIP";
    protected $fillable = ["NIP", "nama", "username", "password"];
    public $timestamps = false;
    public $incrementing = false;
}
