 <?php
 require 'database/Connection.php';
 require 'database/QueryBuilder.php';
 require 'Router.php';
 require  __DIR__ . '/../functions.php';
 require  __DIR__ . '/../Tarea.php';
 require  __DIR__ . '/../Asignado.php';
 


  $config = require 'config.php';
   return new QueryBuilder(
 		Connection::make($config['database'])
 	);