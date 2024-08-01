<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Municipios</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="enlaces">
        <a href="<?php echo base_url('agregar_municipio'); ?>"><button type="button" class="btn btn-warning">
                Agregar nuevo municipio</button></a>
        <a href="<?php echo base_url('ciudadano'); ?>"><button type="button" class="btn btn-primary"><span
                    class="secondarycolor">Ver</span> pagina
                ciudadanos</button></a>
        <a href="<?php echo base_url('departamentos'); ?>"><button type="button" class="btn btn-primary">Ver pagina 
                departamentos
            </button></a>
        <a href="<?php echo base_url('nivelesacademicos'); ?>"><button type="button" class="btn btn-primary">Ver pagina
                niveles academicos</button></a>
        <a href="<?php echo base_url('regiones'); ?>"><button type="button" class="btn btn-primary">Ver pagina de
                regiones
            </button></a>
    </div>
    <h1 class="animate__animated animate__zoomInDown">Municipios</h1>
    <div class="tabla">
        <table class="table table-striped table-border">
            <thead>
                <tr class="table-primary">
                    <th class="animate__animated animate__rubberBand">Codigo de municipio</th>
                    <th class="animate__animated animate__rubberBand">Nombre de municipio</th>
                    <th class="animate__animated animate__rubberBand">Codigo de municipio</th>
                    <th class="animate__animated animate__rubberBand">Buscar</th>
                    <th class="animate__animated animate__rubberBand">Actualizar</th>
                    <th class="animate__animated animate__rubberBand">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
          foreach($datos as $municipio):
        ?>
                <tr>
                    <td><?=$municipio['cod_muni'];?></td>
                    <td><?=$municipio['nombre_municipio'];?></td>
                    <td><?=$municipio['cod_depto'];?></td>
                    <td><a href="<?php echo base_url('buscar_municipio/').$municipio['cod_muni']; ?>" class="btn btn-info"><i
                                class="bi bi-pencil-square"></i></a></td>
                    <td><a href="<?php echo base_url('eliminar_municipio').$municipio['cod_muni']; ?>" class="btn btn-danger"><i
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