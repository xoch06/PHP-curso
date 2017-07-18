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
 
 <h1>Condicionales</h1>
 
 </header>
    
    <main>
            <h2>Tareas</h2>
            <ul>
            
            <?php foreach ($tareas as $tarea): ?>
                <li>

                    Tarea: <?= $tarea['tarea'] ; ?> <br>
                    Asignado: <?= $tarea['asignado'] ; ?> <br>
                    Fecha: <?= $tarea['fecha'] ; ?> <br>
                    Completado: 
         <?php if ($tarea['completado'] == true ) : ?>  
            Tarea realizada
        <?php elseif ($tarea['completado'] === false): ?>
              Tarea incompleta
        <?php  else:  ?>
            No tiene valor asignado
        <?php endif; ?> 
        
        </li>
    <?php endforeach; ?>
        
</ul>

</main>
    
    <footer>
        
    </footer>
        
    
 
 </body>
 </html>