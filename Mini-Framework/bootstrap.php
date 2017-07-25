 <?php
 require 'database/Connection.php';
 require 'functions.php';
 require 'Tarea.php';
 require 'Asignado.php';
 require 'database/QueryBuilder.php';

  $config = require 'config.php';
   return new QueryBuilder(
 		Connection::make($config['database'])
 	);