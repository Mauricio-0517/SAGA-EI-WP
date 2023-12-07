<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sisa_Alumnos extends Model
{

    protected $table = 'sisa_alumnos';

    protected $fillable = [
        'codAlumno',
        'apPaterno',
        'apMaterno',
        'nombre',
        'documento',
        'fechaNacimiento',
        'sexo',
        'idEspecialidad',
        'idGrado',
        'estado',
        'idDepartamento',
        'direccion',
        'telefono',
        'email',
        'idUnidadAcademica',
        'alumno',
        'ingreso',
        'egreso',
    ];
}
