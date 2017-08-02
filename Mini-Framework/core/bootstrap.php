 <?php
 require 'database/Connection.php';
 require 'database/QueryBuilder.php';
 require 'Router.php';
 require 'Request.php';
 require  __DIR__ . '/../functions.php';
 
 $app = array();
 $app['config'] = require 'config.php';
 $app['db'] = new QueryBuilder(
 		Connection::make($app['config']['database'])
 	);

  
  