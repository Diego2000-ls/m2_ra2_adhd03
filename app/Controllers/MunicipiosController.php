<?php

namespace App\Controllers;
use App\Models\MunicipiosModel;

class MunicipiosController extends BaseController
{
    public function index(): string
    {
        $municipio = new MunicipiosModel();
        $datos['datos']=$municipio->findAll();
        return view('municipios',$datos);
    }

    public function agregarMunicipio()
  {
      $datos = [
        'cod_muni' => $this->request->getVar('txtCodMuni'),
        'nombre_municipio' => $this->request->getVar('txtNombreMuni'),
        'cod_depto' => $this->request->getVar('txtCodigoDepto')
      
      ];

      // llamada al model
      $municipioModel = new     MunicipiosModel();
      $municipioModel->insert($datos);

      // Redireccionar a ciudadanos
      return redirect()->route('municipios'); 
   
  }

  public function nuevoMunicipio(): string
  {
    return view('municipiosNuevos');
  }

  public function buscarMunicipio($id = null){
    $municipioModel = new municipioModel();
    $datos ['datos'] = $municipioModel -> where('cod_muni',$id)->first();
    return view ('actualizarMunicipio',$datos);
  }

  public function actualizarMunicipio()
{
    $datos = [
        'cod_muni' => $this->request->getVar('txtCodMuni'),
        'nombre_municipio' => $this->request->getVar('txtNombreMuni'),
        'cod_depto' => $this->request->getVar('txtCodigoDepto')
    ];

    $municipioModel = new MunicipiosModel();
    $municipioModel->update($datos ['cod_muni'],$datos);

    return redirect()->route('municipios');
}

  public function eliminarMunicipio()
{
    $cod_muni = $this->request->getPost('cod_muni'); 

    $municipioModel = new MunicipiosModel();

    $municipioModel->delete(['cod_muni' => $cod_depto]);

    return redirect()->route('municipios');
}
}