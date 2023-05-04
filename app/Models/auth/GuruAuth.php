<?php

namespace App\Models\auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GuruAuth extends Authenticatable
{
    use HasFactory;
    protected $table = "tb_guru";
    protected $primaryKey = "NIP";
}
