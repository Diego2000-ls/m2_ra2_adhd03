<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelAcademicoModel extends Model
{
    protected $table         = 'nivelesacademicos';
    protected $primarykey    = 'cod_nivel_acad';
    protected $allowedFields = [
        'cod_nivel_acad', 'nombre', 'descipcion'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}