<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departamento</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Actualizar Departamento</h1>
        <a href="departamentos"><button class="btn btn-danger">Pagina Ciudadanos</button></a>
        <div class="formularios_contenedor">
        <form action="<?php echo base_url('actualizar_departamento'); ?>" method="post">
            <div class="mb-8">
                <label for="txtCodDepto" class="form-label">DPI:</label>
                <input type="number" id="txtCodDepto" name="txtCodDepto" class="form-control" placeholder="Ingrese el codigo de departamento" 
                value =<?= $datos['cod_depto'];?>>
            </div>
            <div class="mb-8">
                <label for="txtNombreDepto" class="form-label">Apellido:</label>
                <input type="text" id="txtNombreDepto" name="txtNombreDepto" class="form-control" placeholder="Ingrese Nombre de departamento"
                value =<?= $datos['nombre_depto'];?>>
            </div>
            <div class="mb-8">
                <label for="txtCodigoRegion" class="form-label">Nombre:</label>
                <input type="text" id="txtCodigoRegion" name="txtCodigoRegion" class="form-control" placeholder="Ingrese codigo de region"
                value =<?= $datos['cod_region'];?>>
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