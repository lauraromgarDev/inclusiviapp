<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Usuario extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable; // El trait Authenticatable maneja los métodos de la interfaz

    // Nombre de la tabla
    protected $table = 'usuarios';

    // Clave primaria
    protected $primaryKey = 'id';

    // Indicar que la clave primaria es incremental
    public $incrementing = true;

    // Tipo de clave primaria
    protected $keyType = 'int';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'login',
        'nombre',
        'email',
        'password',
        'admin',
        'created_by',
        'updated_by',
    ];

    // Habilitar timestamps automáticos
    public $timestamps = true;

    // Ocultar campos sensibles al serializar el modelo
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
