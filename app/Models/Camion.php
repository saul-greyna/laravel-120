<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    protected $table = 'camiones';
    protected $primaryKey = 'num_camion';
    protected $fillable = ['placas', 'tipo', 'id_camionero'];
}
