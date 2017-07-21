
 	<?php
 require 'functions.php';
 require 'Tarea.php';
 require 'Asignado.php';

 $pdo = connectDB();


  $tareas =ListaTareas($pdo);
   
   
$asignados =ListaAsignados($pdo);





require 'index.view.php';

 	
