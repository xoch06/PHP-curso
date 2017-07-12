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
 	//variable super global GET
 	// http: mini-framework.com/saludo=Hola&nombre=xochitl&edad=27 
 	//este es un cometario
 	$saludo = $_GET['saludo'];
 	$nombre = $_GET['nombre'];
 	$edad = $_GET['edad'];

 	?>
 	<h1> 
 	<? php
 	
 	//echo 'Este es un saludo: $saludo' no imprime el valor del saludo
 	 
 	 echo $saludo; . "" . $nombre; ?> 
 	 <br>
 	 <?php echo $edad; ?>

 	 ?>
 		
 	</h1>
 </header>
 
 </body>
 </html>