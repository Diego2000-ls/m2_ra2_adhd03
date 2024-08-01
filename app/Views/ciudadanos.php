<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="enlaces">
        <form action="<?php echo base_url('formulario_ciudadano'); ?>" method="get">
            <button type="submit" class="btn btn-danger"><span class="secondarycolor">Agregar Nuevo</span>
                Ciudadano</button>
        </form>
        <a href="<?php echo base_url('departamentos'); ?>"><button type="button" class="btn btn-primary"><span
                    class="secondarycolor">Ver</span> pagina
                departamentos</button></a>
        <a href="<?php echo base_url('municipios'); ?>"><button type="button" class="btn btn-primary">Ver pagina de
                municipios
            </button></a>
        <a href="<?php echo base_url('nivelesacademicos');?>"><button type="button" class="btn btn-primary">Ver pagina
                niveles academicos</button></a>
        <a href="<?php echo base_url('regiones'); ?>"><button type="button" class="btn btn-primary">Ver pagina de
                regiones
            </button></a>
    </div>
    <h1 class="animate__animated animate__zoomInDown">Ciudadanos</h1>
    <div class="tabla">
        <table class="table table-striped table-border">
            <thead>
                <tr class="table-primary">
                    <th class="animate__animated animate__rubberBand">DPI</th>
                    <th class="animate__animated animate__rubberBand">Apellido</th>
                    <th class="animate__animated animate__rubberBand">Nombre</th>
                    <th class="animate__animated animate__rubberBand">Direccion</th>
                    <th class="animate__animated animate__rubberBand">Telefono de casa</th>
                    <th class="animate__animated animate__rubberBand">Telefono de movil</th>
                    <th class="animate__animated animate__rubberBand">Email</th>
                    <th class="animate__animated animate__rubberBand">Fecha de nacimiento</th>
                    <th class="animate__animated animate__rubberBand">Codigo de nivel academico</th>
                    <th class="animate__animated animate__rubberBand">Codigo de municipio</th>
                    <th class="animate__animated animate__rubberBand">Contraseña</th>
                    <th class="animate__animated animate__rubberBand">Actualizar</th>
                    <th class="animate__animated animate__rubberBand">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
          foreach($datos as $ciudadano):
        ?>
                <tr>
                    <td><?=$ciudadano['dpi'];?></td>
                    <td><?=$ciudadano['apellido'];?></td>
                    <td><?=$ciudadano['nombre'];?></td>
                    <td><?=$ciudadano['direccion'];?></td>
                    <td><?=$ciudadano['tel_casa'];?></td>
                    <td><?=$ciudadano['tel_movil'];?></td>
                    <td><?=$ciudadano['email'];?></td>
                    <td><?=$ciudadano['fechanac'];?></td>
                    <td><?=$ciudadano['cod_nivel_acad'];?></td>
                    <td><?=$ciudadano['cod_muni'];?></td>
                    <td><?=$ciudadano['contra'];?></td>
                    <td><a href="<?php echo base_url('buscar_ciudadano/').$ciudadano['dpi']; ?>" class="btn btn-info"><i
                                class="bi bi-pencil-square"></i></a></td>
                    <td><a href="<?php echo base_url('eliminar_ciudadano'); ?>" class="btn btn-danger"><i
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