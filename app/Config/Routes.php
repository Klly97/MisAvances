<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Inicio');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);


$routes->get('/', 'Inicio::redirecInicio');
$routes->get('/login', 'Inicio::index');
$routes->get('/inicio', 'Inicio::inicio');
$routes->get('/cerrar_sesion', 'Inicio::cerrarSesion');
$routes->get('/selec_registro', 'Inicio::selec_registro');
$routes->get('/registro/(:alpha)', 'Inicio::vRegistro/$1');
$routes->post('/validarCredencialesLogin', 'Inicio::validarDatosIngreso');
$routes->post('/crear_persona', 'Persona::crear');
$routes->get('/agregarMaquinas', 'Perfiles::RegistroMaquinas');
$routes->get('/informancion_usuario', 'Perfiles::datosUsuario');

