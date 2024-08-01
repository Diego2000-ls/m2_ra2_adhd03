<?php

namespace App\Controllers;
use App\Models\CiudadanosModel;

class CiudadanosController extends BaseController
{
  public function index(): string
  {
    $ciudadanos = new CiudadanosModel();
    $datos['datos'] = $ciudadanos->findAll();
    return view('ciudadanos', $datos);
  }

  public function agregarCiudadano()
  {
      $datos = [
        'dpi' => $this->request->getVar('txtDpi'),
        'apellido' => $this->request->getVar('txtApellido'),
        'nombre' => $this->request->getVar('txtNombre'),
        'direccion' => $this->request->getVar('txtDireccion'),
        'tel_casa' => $this->request->getVar('txtTelCasa'),
        'tel_movil' => $this->request->getVar('txtTelMovil'),
        'email' => $this->request->getVar('txtEmail'),
        'fechanac' => $this->request->getVar('txtFechaNac'),
        'cod_nivel_acad' => $this->request->getVar('txtCodNivelAcademico'),
        'cod_muni' => $this->request->getVar('txtCodMuni'),
        'contra' => $this->request->getVar('txtContra')
      ];

      // llamada al model
      $ciudadanosModel = new CiudadanosModel();
      $ciudadanosModel->insert($datos);

      // Redireccionar a ciudadanos
      return redirect()->route('ciudadano'); 
   
  }

  public function nuevoCiudadano(): string
  {
    return view('ciudadanosNuevos');
  }

  public function buscarCiudadano($id = null){
    $ciudadanosModel = new CiudadanosModel();
    $datos ['datos'] = $ciudadanosModel -> where('dpi',$id)->first();
    return view ('actualizarCiudadano',$datos);
  }

  public function actualizarCiudadano()
{
    $datos = [
        'dpi' => $this->request->getVar('txtDpi'),
        'apellido' => $this->request->getVar('txtApellido'),
        'nombre' => $this->request->getVar('txtNombre'),
        'direccion' => $this->request->getVar('txtDireccion'),
        'tel_casa' => $this->request->getVar('txtTelCasa'),
        'tel_movil' => $this->request->getVar('txtTelMovil'),
        'email' => $this->request->getVar('txtEmail'),
        'fechanac' => $this->request->getVar('txtFechaNac'),
        'cod_nivel_acad' => $this->request->getVar('txtCodNivelAcademico'),
        'cod_muni' => $this->request->getVar('txtCodMuni'),
        'contra' => $this->request->getVar('txtContra')
    ];

    $ciudadanosModel = new CiudadanosModel();
    $ciudadanosModel->update($datos ['dpi'],$datos);

    return redirect()->route('ciudadano');
}

  public function eliminarCiudadano()
{
    $dpi = $this->request->getPost('dpi'); 

    $ciudadanosModel = new CiudadanosModel();

    $ciudadanosModel->delete(['dpi' => $dpi]);

    return redirect()->route('ciudadano');
}


}