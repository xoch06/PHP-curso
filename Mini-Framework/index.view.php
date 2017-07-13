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
 	
 	<h1> 
 	<?php
 	

 	 echo $saludo . " " . $nombre; ?> 
 	 <br>
 	 <?php echo $edad; ?>
 		
 	</h1>
 </header>
 
 </body>
 </html>