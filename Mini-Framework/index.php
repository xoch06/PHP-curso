<?php

$query = require 'core/bootstrap.php';
 
require 'routes.php';

$router = new Router();

$router->define($routes);

$uri = $_SERVER['REQUEST_URI'];
//contacto "/"
$uri =trim($uri, '/');


require $router->direct($uri);


 	
