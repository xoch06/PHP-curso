<?php
 
//conecta a la db
function connectDB()
 {
	try{

	$pdo = new PDO ('mysql:host=127.0.0.1;dbname=tareas','root','');
	return $pdo;

} catch (PDOException $ex) {
	dd($e->getMessage());
	}
 }


//para la funcion 
 function dd ($arreglo)
 {
 	echo '<pre>';
 	var_dump($arreglo);
 	echo '</pre>';
 	die();
 }

//para traer las traeas y recibe la BD

function ListaTareas($base)
 {

$sentencia = $base->prepare('SELECT * FROM tarea');
$sentencia-> execute();
$tareas = $sentencia-> fetchAll(PDO::FETCH_CLASS, 'Tarea');
return $tareas;
}


function ListaTareasCompletadas($base)
 {

$sentencia = $base->prepare('SELECT * FROM tarea WHERE completado = 1');
$sentencia-> execute();
$tareas = $sentencia-> fetchAll();
return $tareas;
}
 
