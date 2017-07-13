
 	<?php
 	//Arreglos
		$nombres = array(
			'Alejandro',
			'Luis',
			'David' );

		$animales = [
			'Perro',
			'Gato',
			'Conejo' 
			];

			// Agregar elmentos a los  arreglos
			array_push($nombres,'Pedro' );

			// Traer un elemento en especifico
			$dato = $animales[1];

			//existe un elemento?
			$respuesta = in_array("Alejandro",$nombres);
			
			//Eliminar un elemento
			unset ($nombres[1]);




 require 'index.view.php';

 	