<?php

namespace App\Controllers;
use App\Models\NivelAcademicoModel;

class NivelAcademicoController extends BaseController
{
    public function index(): string
    {
        $niveles = new NivelAcademicoModel();
        $datos['datos']=$niveles->findAll();
        return view('nivelesAcademicos',$datos);
    }

    public function agregarNivelAcademico()
  {
      $datos = [
        'cod_muni' => $this->request->getVar('txtCodNivelAcad'),
        'nombre' => $this->request->getVar('txtNombre'),
        'descripcion' => $this->request->getVar('txtDescripcion')
      ];

      // llamada al model
      $nivelesAcademicosModel = new     NivelAcademicoModel();
      $nivelesAcademicosModel->insert($datos);

      // Redireccionar a ciudadanos
      return redirect()->route('nivelesacademicos'); 
   
  }

  public function nuevoNivelAcademico(): string
  {
    return view('nivelesAcademicosNuevos');
  }

  public function buscarniveleAcademico($id = null){
    $nivelesAcademicosModel = new NivelAcademicoModel();
    $datos ['datos'] = $nivelesAcademicosModel -> where('cod_nivel_acad',$id)->first();
    return view ('actualizarnivelAcademico',$datos);
  }

  public function actualizarNivelAcademico()
{
    $datos = [
        'cod_muni' => $this->request->getVar('txtCodNivelAcad'),
        'nombre' => $this->request->getVar('txtNombre'),
        'descripcion' => $this->request->getVar('txtDescripcion')
    ];

    $nivelesAcademicosModel = new NivelAcademicoModel();
    $nivelesAcademicosModel->update($datos ['cod_nivel_acad'],$datos);

    return redirect()->route('nivelesacademicos');
}

  public function eliminarNivelAcademico()
{
    $cod_nivel_acad = $this->request->getPost('cod_nivel_acad'); 

    $nivelesAcademicosModel = new NivelAcademicoModel();

    $nivelesAcademicosModel->delete(['cod_nivel_acad' => $cod_nivel_acad]);

    return redirect()->route('nivelesacademicos');
}
}