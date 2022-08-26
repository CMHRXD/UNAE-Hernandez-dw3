<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $table ='alumnos';
    public $fillable = [
        "nombre","apellido","edad","c_i", "telefono","direccion","correo","profesion","fecha_nac", "genero"
    ];
}
