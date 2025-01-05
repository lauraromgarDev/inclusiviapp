<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;


class Proyecto extends Model
{

    // Nombre de la tabla
    protected $table = 'proyectos';

    // Clave primaria
    protected $primaryKey = 'codigo';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'created_by',
        'updated_by',
    ];

}
