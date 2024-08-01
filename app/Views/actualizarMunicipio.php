<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Municipios</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Actualizar Municipio</h1>
        <a href="municipios"><button class="btn btn-danger">Pagina Municipios</button></a>
        <div class="formularios_contenedor">
        <form action="<?php echo base_url('actualizar_municipio'); ?>" method="post">
            <div class="mb-8">
                <label for="txtCodMuni" class="form-label">Codigo de municipio:</label>
                <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control" placeholder="Ingrese el codigo de municipio"
                value =<?= $datos['cod_muni'];?>>
            </div>
            <div class="mb-8">
                <label for="txtNombreMuni" class="form-label">Nombre de municipio:</label>
                <input type="text" id="txtNombreMuni" name="txtNombreMuni" class="form-control" placeholder="Ingrese Nombre de municipio"
                value =<?= $datos['nombre_municipio'];?>>
            </div>
            <div class="mb-8">
                <label for="txtCodigoDepto" class="form-label">Codigo de departamento:</label>
                <input type="text" id="txtCodigoDepto" name="txtCodigoDepto" class="form-control" placeholder="Ingrese codigo de departamento"
                value =<?= $datos['cod_depto'];?>>
            </div>
            <div id="btn" class="mb-8">
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>