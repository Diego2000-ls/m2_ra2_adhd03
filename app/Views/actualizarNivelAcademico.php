<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Niveles Academicos</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Niveles Academicos</h1>
        <a href="municipios"><button class="btn btn-danger">Pagina Niveles Academicos</button></a>
        <div class="formularios_contenedor">
        <form action="<?php echo base_url('actualizar_nivelAcademico'); ?>" method="post">
            <div class="mb-8">
                <label for="txtCodNivelAcad" class="form-label">Codigo de nivel academico:</label>
                <input type="number" id="txtCodNivelAcad" name="txtCodNivelAcad" class="form-control" placeholder="Ingrese el codigo de nivel academico"
                value =<?= $datos['cod_muni'];?>>
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre:</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese Nombre"
                value =<?= $datos['nombre'];?>>
            </div>
            <div class="mb-8">
                <label for="txtDescripcion" class="form-label">Descripcion:</label>
                <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control" placeholder="Descripcion"
                value =<?= $datos['descripcion'];?>>
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