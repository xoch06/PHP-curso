
 	<?php
 	//Arreglos Asociativos
 	//funcionan con dato llave- valor

 	$persona = array(
 		'Nombre' => 'Xoch',
 		'Edad' => 27,
 		'Direccion' => 'Av Chapultepec' 
 		);
		
		$persona["Edad"] = 60;
		$persona["Telefono"] = "12345";
		unset ($persona["Direccion"]);

		//Arreglo de arreglos asociativos, multidimensionados o anidados
		
		$tarea1 = array(
			'Tarea' =>'Revisar el codigo',
			'Asignado' =>'Alejandro',
			'Fecha' =>'25 de jul 2017', 
			);

		$tarea2 = array(
			'Tarea' =>'Revisar el codigo',
			'Asignado' =>'Luis',
			'Fecha' =>'30 de jul 2017', 
			);

		$tareas = array(
			$tarea1,
			$tarea2,
			array(

			'Tarea' =>'Subir el codigo',
			'Asignado' =>'David',
			'Fecha' =>'31 de jul 2017', 
			)
			);




 require 'index.view.php';

 	