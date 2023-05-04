<?php

namespace App\Models\auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminAuth extends Authenticatable
{
    use HasFactory;
    protected $table = "tb_operator";
    protected $primaryKey = "NIP";
}
