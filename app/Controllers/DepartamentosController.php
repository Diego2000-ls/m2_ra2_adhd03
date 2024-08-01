<?php

namespace App\Controllers;
use App\Models\DepartamentosModel;

class DepartamentosController extends BaseController
{
    public function index(): string
    {
        $departamento = new DepartamentosModel();
        $datos['datos'] = $departamento->findAll();
        return view('departamentos',$datos);
    }

    public function agregarDepartamento()
  {
      $datos = [
        'cod_depto' => $this->request->getVar('txtCodDepto'),
        'nombre_depto' => $this->request->getVar('txtNombreDepto'),
        'cod_region' => $this->request->getVar('txtCodigoRegion')
      ];

      // llamada al model
      $departamentosModel = new departamentosModel();
      $departamentosModel->insert($datos);

      // Redireccionar a departamentos
      return redirect()->route('departamentos'); 
   
  }

  public function nuevoDepartamento(): string
  {
    return view('departamentosNuevos');
  }

  public function buscarDepartamento($id = null){
    $departamentosModel = new departamentosModel();
    $datos ['datos'] = $departamentosModel -> where('cod_depto',$id)->first();
    return view ('actualizarDepartamento',$datos);
  }

  public function actualizarDepartamento()
{
    $datos = [
        'cod_depto' => $this->request->getVar('txtCodDepto'),
        'nombre_depto' => $this->request->getVar('txtNombreDepto'),
        'cod_region' => $this->request->getVar('txtCodigoRegion')
    ];

    $departamentosModel = new departamentosModel();
    $departamentosModel->update($datos ['cod_depto'],$datos);

    return redirect()->route('departamentos');
}

  public function eliminarDepartamento()
{
    $cod_depto = $this->request->getPost('cod_depto'); 

    $departamentosModel = new departamentosModel();

    $departamentosModel->delete(['cod_depto' => $cod_depto]);

    return redirect()->route('departamentos');
}


}