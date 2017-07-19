<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <title>Mini Framework PHP</title>
 <style>
 header{
 background: #e3e3e3;
 padding-left: 2em;
 text-align:  center;
 } 
 
     </style>
 
 </head>
 <body>
 
 <header>
 <h2>Tareas<h2>
 
 
 </header>
    
    <main>
    <ul>
    <?php foreach ($tareas as $tarea): ?>
        <li>
        <?= $tarea['descripcion']; ?>
        <?= $tarea['asignado']; ?>
        <?= $tarea['fecha']; ?>
        <?= $tarea['completado']; ?>
        
        </li>
    <?php endforeach; ?>
        <?
    </ul>




</main>
    
    <footer>
        
    </footer>
        
    
 
 </body>
 </html>