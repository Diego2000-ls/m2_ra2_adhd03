<?php

namespace App\Models;

use CodeIgniter\Model;

class RegionesModel extends Model
{
    protected $table         = 'regiones';
    protected $primarykey    = 'cod_region';
    protected $allowedFields = [
        'cod_region', 'nombre', 'descripcion'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}