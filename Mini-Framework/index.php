
 	<?php
 require 'functions.php';
 require 'Tarea.php';
 

 //$pdo = connectDB();

 //$tareas =ListaTareasCompletadas ($pdo);

//crea objetos
$tarea1 = new Tarea(1, "Ir al supermercado", "xochitl",1, "2017/07/30");
$tarea2 = new Tarea(2, "Ir a la plaza", "Diego" , 0, "2017/08/2");
 
 //asignamos sus datos

//$tarea1->descripcion = "Ir al supermercado";
//$tarea1->setId("1");
//$tarea1->setDescripcion("Ir al supermercado");
//$tarea1->setAsignado("Xochitl");
//$tarea1->setCompletado("1");
//$tarea1->setFecha("2017-07-30");


$tarea2->setId("2");
$tarea2->setDescripcion("Ir a la plaza");
$tarea2->setAsignado("Diego");
$tarea2->setCompletado("0");
$tarea2->setFecha("2017-08-2");



echo $tarea1->getId() . "<br>" ;
echo $tarea1->getDescripcion() . "<br>";
echo $tarea1->getAsignado() . "<br>";
echo $tarea1->getCompletado() . "<br>";
echo $tarea1->getFecha() . "<br>";

echo $tarea2->getId() . "<br>" ;
echo $tarea2->getDescripcion() . "<br>";
echo $tarea2->getAsignado() . "<br>";
echo $tarea2->getCompletado() . "<br>";
echo $tarea2->getFecha() . "<br>";



//require 'index.view.php';

 	
