<?php
 
 $tareas = $app['db']->selectAll('tarea
 	', 'Tarea');
 $asignados = $app['db']->selectAll('asignado', 'Asignado');

require __DIR__ . '/../views/inicio.view.php';