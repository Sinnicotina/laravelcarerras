<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especializacion extends Model
{
    protected $table = "especializacion";
    protected $primaryKey = 'espe_codi';
    use HasFactory;
}
