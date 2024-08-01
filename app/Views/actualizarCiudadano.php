<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Actualizar Ciudadanos</h1>
        <a href="ciudadano"><button class="btn btn-danger">Pagina Ciudadanos</button></a>
        <div class="formularios_contenedor">
        <form action="<?php echo base_url('actualizar_ciudadano'); ?>" method="post">
            <div class="mb-8">
                <label for="txtDpi" class="form-label">DPI:</label>
                <input type="number" id="txtDpi" name="txtDpi" class="form-control" placeholder="Ingrese su DPI por favor" 
                value =<?= $datos['dpi'];?>>
            </div>
            <div class="mb-8">
                <label for="txtApellido" class="form-label">Apellido:</label>
                <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese Apellido"
                value =<?= $datos['apellido'];?>>
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre:</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre"
                value =<?= $datos['nombre'];?>>
            </div>
            <div class="mb-8">
                <label for="txtDireccion" class="form-label">Direccion de vivienda:</label>
                <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese Direccion">
            </div>
            <div class="mb-8">
                <label for="txtTelCasa" class="form-label">Telefono de casa:</label>
                <input type="text" id="txtTelCasa" name="txtTelCasa" class="form-control" placeholder="Ingrese calle o avenida">
            </div>
            <div class="mb-8">
                <label for="txtTelMovil" class="form-label">Telefono movil</label>
                <input type="text" id="txtTelMovil" name="txtTelMovil" class="form-control" placeholder="Ingrese No. de casa">
            </div>
            <div class="mb-8">
                <label for="txtEmail" class="form-label">Email:</label>
                <input type="text" id="txtEmail" name="txtEmail" class="form-control" placeholder="Ingrese Email">
            </div>
            <div class="mb-8">
                <label for="txtFechaNac" class="form-label">Fecha de nacimiento:</label>
                <input type="date" id="txtFechaNac" name="txtFechaNac" class="form-control" placeholder="Ingrese Fecha de nacimiento">
            </div>
            <div class="mb-8">
                <label for="txtCodNivelAcademico" class="form-label">Codigo de nivel academico:</label>
                <input type="number" id="txtCodNivelAcademico" name="txtCodNivelAcademico" class="form-control" placeholder="Ingrese Codigo de nivel academico">
            </div>
            <div class="mb-8">
                <label for="txtCodMuni" class="form-label">Codigo de municipio:</label>
                <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control" placeholder="Ingrese codigo de municipio">
            </div>
            <div class="mb-8">
                <label for="txtContra" class="form-label">Contraseña:</label>
                <input type="text" id="txtContra" name="txtContra" class="form-control" placeholder="Ingrese contraseña">
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