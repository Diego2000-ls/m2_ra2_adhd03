<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ciudadano', 'CiudadanosController::index');
$routes->get('formulario_ciudadano', 'CiudadanosController::nuevoCiudadano');
$routes->post('agregar_ciudadano', 'CiudadanosController::agregarCiudadano');
$routes->get('form_act_ciudadano', 'CiudadanosController::actuCiudadano');
$routes->get('buscar_ciudadano/(:num)', 'CiudadanosController::buscarCiudadano/$1');
$routes->post('actualizar_ciudadano', 'CiudadanosController::actualizarCiudadano');
$routes->get('eliminar_ciudadano', 'CiudadanosController::eliminarCiudadano');

$routes->get('departamentos', 'DepartamentosController::index');
$routes->get('formulario_departamento', 'DepartamentosController::nuevoDepartamento');
$routes->post('agregar_departamento', 'DepartamentosController::agregarDepartamento');
$routes->get('form_act_departamento', 'DepartamentosController::actuDepartamento');
$routes->get('buscar_departamento/(:num)', 'DepartamentosController::buscarDepartamento/$1');
$routes->post('actualizar_departamento', 'DepartamentoController::actualizarDepartamento');
$routes->get('eliminar_departamento', 'DepartamentosController::eliminarDepartamento');

$routes->get('municipios', 'MunicipiosController::index');
$routes->get('formulario_municipio', 'MunicipiosController::nuevoMunicipio');
$routes->post('agregar_municipio', 'MunicipiosController::agregarMunicipio');
$routes->get('form_act_municipio', 'MunicipiosController::actuMunicipio');
$routes->get('buscar_municipio/(:num)', 'MunicipiosController::buscarMunicipio/$1');
$routes->post('actualizar_municipio', 'MunicipiosController::actualizarMunicipio');
$routes->get('eliminar_municipio', 'MunicipiosController::eliminarMunicipio');

$routes->get('nivelesacademicos', 'NivelAcademicoController::index');
$routes->get('formulario_nivelAcademico', 'NivelAcademicoController::nuevoNivelAcademico');
$routes->post('agregar_nivelAcademico', 'NivelAcademicoController::agregarNivelAcademico');
$routes->get('form_act_nivelAcademico', 'NivelAcademicoController::actuNivelAcademico');
$routes->get('buscar_nivelAcademico/(:num)', 'NivelAcademicoController::buscarniveleAcademico/$1');
$routes->post('actualizar_nivelAcademico', 'NivelAcademicoController::actualizarNivelAcademico');
$routes->get('eliminar_nivelAcademico', 'NivelAcademicoController::eliminarNivelAcademico');

$routes->get('regiones', 'RegionesController::index');
$routes->get('formulario_region', 'RegionesController::nuevaRegion');
$routes->post('agregar_region', 'RegionesController::agregarRegion');
$routes->get('form_act_region', 'RegionesController::actuRegion');
$routes->get('buscar_region/(:num)', 'RegionesController::buscarRegion/$1');
$routes->post('actualizar_region', 'RegionesController::actualizarRegion');
$routes->get('eliminar_region', 'RegionesController::eliminarRegion');