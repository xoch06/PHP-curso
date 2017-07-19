
 	<?php
 require 'functions.php';
 

 $pdo = connectDB();

// Se prepara la sentencia para su ejecucion
$sentencia = $pdo->prepare('SELECT * FROM tarea');

//se ejecuta la sentencia preparada
$sentencia-> execute();
// guarda los datos recuperados

$tareas = $sentencia-> fetchAll();

echo $tareas [0] ['descripcion'];
echo $tareas [1] ['descripcion'];

dd($tareas);



 

 require 'index.view.php';

 	
