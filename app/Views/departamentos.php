<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departamentos</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="enlaces">
        <a href="<?php echo base_url('formulario_departamento'); ?>"><button type="button" class="btn btn-danger">
                Agregar nuevo departamento</button></a>
        <a href="<?php echo base_url('ciudadano'); ?>"><button type="button" class="btn btn-primary"><span
                    class="secondarycolor">Ver</span> pagina
                ciudadanos</button></a>
        <a href="<?php echo base_url('municipios'); ?>"><button type="button" class="btn btn-primary">Ver pagina de
                municipios
            </button></a>
        <a href="<?php echo base_url('nivelesacademicos'); ?>"><button type="button" class="btn btn-primary">Ver pagina
                niveles academicos</button></a>
        <a href="<?php echo base_url('regiones'); ?>"><button type="button" class="btn btn-primary">Ver pagina de
                regiones
            </button></a>
    </div>
    <h1 class="animate__animated animate__zoomInDown">Departamentos</h1>
    <div class="tabla">
        <table class="table table-striped table-border">
            <thead>
                <tr class="table-primary">
                    <th class="animate__animated animate__rubberBand">Codigo de departamento</th>
                    <th class="animate__animated animate__rubberBand">Nombre de departamento</th>
                    <th class="animate__animated animate__rubberBand">Codigo de region</th>
                    <th class="animate__animated animate__rubberBand">Actualizar</th>
                    <th class="animate__animated animate__rubberBand">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
          foreach($datos as $departamento):
        ?>
                <tr>
                    <td><?=$departamento['cod_depto'];?></td>
                    <td><?=$departamento['nombre_depto'];?></td>
                    <td><?=$departamento['cod_region'];?></td>
                    <td><a href="<?php echo base_url('buscar_departamento/').$departamento['cod_depto']; ?>" class="btn btn-info"><i
                                class="bi bi-pencil-square"></i></a></td>
                    <td><a href="<?php echo base_url('eliminar_departamento').$departamento['cod_depto']; ?>" class="btn btn-danger"><i
                                class="bi bi-trash"></i></a></td>
                </tr>
                <?php
          endforeach;
        ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>