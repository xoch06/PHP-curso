
 	<?php
 	//Arreglos Asociativos
 	//funcionan con dato llave- valor

 	
		
		$tarea1 = array(
			'tarea' =>'Revisar el codigo',
			'asignado' =>'Alejandro',
			'fecha' =>'25 de jul 2017',
			'completado' => false 
			);

		$tarea2 = array(
			'tarea' =>'Revisar el codigo',
			'asignado' =>'Luis',
			'fecha' =>'30 de jul 2017', 
			'completado'=> true
			);

		$tareas = array(
			$tarea1,
			$tarea2,
			array(

			'tarea' =>'Subir el codigo',
			'asignado' =>'David',
			'fecha' =>'31 de jul 2017',
			'completado' => false 
			)
			);




 require 'index.view.php';

 	