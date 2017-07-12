<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <title>Mini Framework PHP</title>
 <style>
 header{
 background: #e3e3e3;
 padding: 2em;
 text-align:  center;
 } 
 	 </style>
 </head>
 <body>
 <header>
 	<?php
 	
 	//este es un cometario
 	$saludo = "hola mundo";

 	?>
 	<h1> 
 	<? php
 	
 	//echo 'Este es un saludo: $saludo' no imprime el valor del saludo
 	 
 	 echo saludo; 
 	 echo "Este es un saludo: $saludo";
 	 
 	 //concatenar variables
 	 echo 'Este es otro saludo:' . $saludo;

 	 //forma explicita de imprimir la variable

 	 echo"imprimiendo saludo: {$saludo}";
 	 ?>
 		
 	</h1>
 </header>
 
 </body>
 </html>