<?php

namespace App\Controllers;
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function index(): string
    {
        $region = new RegionesModel();
        $datos['datos']=$region->findAll();
        return view('regiones',$datos);
    }

    public function agregarRegion()
  {
      $datos = [
        'cod_region' => $this->request->getVar('txtCodRegion'),
        'nombre' => $this->request->getVar('txtNombre'),
        'descripcion' => $this->request->getVar('txtDescripcion')
      
      ];

      // llamada al model
      $regionModel = new     RegionesModel();
      $regionModel->insert($datos);

      // Redireccionar a ciudadanos
      return redirect()->route('regiones'); 
   
  }

  public function nuevaRegion(): string
  {
    return view('regionesNuevos');
  }

  public function buscarRegion($id = null){
    $regionModel = new RegionesModel();
    $datos ['datos'] = $regionModel -> where('cod_region',$id)->first();
    return view ('actualizarRegion',$datos);
  }

  public function actualizarRegion()
{
    $datos = [
        'cod_region' => $this->request->getVar('txtCodRegion'),
        'nombre' => $this->request->getVar('txtNombre'),
        'descripcion' => $this->request->getVar('txtDescripcion')
    ];

    $regionModel = new RegionesModel();
    $regionModel->update($datos ['cod_region'],$datos);

    return redirect()->route('regiones');
}

  public function eliminarRegion()
{
    $cod_region = $this->request->getPost('cod_region'); 

    $regionModel = new RegionesModel();

    $regionModel->delete(['cod_region' => $cod_region]);

    return redirect()->route('regiones');
}
}
