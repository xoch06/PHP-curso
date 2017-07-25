<?php
 
//conecta a la db
 


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
$sentencia->execute();
$tareas = $sentencia-> fetchAll(PDO::FETCH_CLASS, 'Tarea');
return $tareas;
}
 
function ListaAsignados($base)
{
 $sentencia = $base->prepare('SELECT * FROM asignado');
 $sentencia->execute();
 $asignados = $sentencia->fetchAll(PDO::FETCH_CLASS,'Asignado');
 return $asignados;
}