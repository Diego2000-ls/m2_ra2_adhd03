<?php

namespace App\Models;

use CodeIgniter\Model;

class MunicipiosModel extends Model
{
    protected $table         = 'municipios';
    protected $primarykey    = 'cod_muni';
    protected $allowedFields = [
        'cod_muni', 'nombre_municipio', 'cod_depto'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}