 <?php
 require  __DIR__ . '/../functions.php';
 
 
 App::bind('config',require'config.php');
 
 App::bind('db', new QueryBuilder(
 		Connection::make(App::get('config')['database'])
 
 	));

  
  