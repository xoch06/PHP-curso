 <?php
 require 'database/Connection.php';
 require 'database/QueryBuilder.php';
 require 'Router.php';
 require 'Request.php';
 require  __DIR__ . '/../functions.php';
 require  __DIR__ . '/../Tarea.php';
 require  __DIR__ . '/../Asignado.php';
 
 $app = array();
 $app['config'] = require 'config.php';
 $app['db'] = new QueryBuilder(
 		Connection::make($app['config']['database'])
 	);

  
  