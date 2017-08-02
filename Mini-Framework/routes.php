<?php

$router->get('','controllers/inicio.php');
$router->get('acerca','controllers/acerca.php');
$router->get('contacto','controllers/contacto.php');
//cuando vaya/usuario por post ejecuta
$router->post('usuario','controllers/usuario.php');