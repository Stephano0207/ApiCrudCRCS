<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $table='alumnos';
    protected $primaryKey='id';

    protected $fillable=[
        'nombres',
        'apellidos',
        'direccion',
        'zona',
        'sexo',
        'edad'
    ];

    public $timestamps=false;
}
