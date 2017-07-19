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


 
