<?php

namespace App\Models\guru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $table = "tb_semester";
    protected $primaryKey = "semester";
    protected $fillable = ['semester'];
    public $incrementing = false;
    public $timestamps = false;
}
