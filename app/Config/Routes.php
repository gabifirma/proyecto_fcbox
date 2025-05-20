<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('terminos', 'Home::terminos');
$routes->get('galeria', 'Home::galeria');
$routes->get('login', 'Home::login');

$routes->get('contacto', 'Home::contacto');
$routes->post('consulta', 'Usuarios_controller::añadir_consulta');

$routes->get('registrarse', 'Home::registrarse');
$routes->post('registro_cliente', 'Clientes_controller::add_cliente');
