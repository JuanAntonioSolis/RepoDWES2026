<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    /** @use HasFactory<\Database\Factories\IncidenciaFactory> */
    use HasFactory;

    //Para rellenar de una con Incidencia::create($request->all());
    protected $fillable = ["latitud", "longitud","ciudad","direccion","descripcion","estado"];
}
