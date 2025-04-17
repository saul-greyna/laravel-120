<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    protected $table = 'camioneros';
    protected $primaryKey = 'id_camionero';
    public $timestamps = true;

    protected $fillable = ['nombre', 'apellidos', 'direccion', 'salario', 'licencia'];
}

