<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "tb_cliente";

    protected $fillable = ["nombre", "ap_paterno", "ap_materno", "dni", "ruc", "telefono", "email", "direccion"];
}
