<?php
 
 $tareas = $query->selectAll('tarea
 	', 'Tarea');
 $asignados = $query->selectAll('asignado', 'Asignado');

require __DIR__ . '/../views/index.view.php';