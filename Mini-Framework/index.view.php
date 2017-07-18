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
            <!--continue: cuando la condición se cumpla seguirá  -->
            <?php foreach ($tareas as $tarea): ?>
                <?php  if ($tarea['completado'] === true) continue; ?>
                <li>

                    Tarea: <?= $tarea['tarea'] ; ?> <br>
                    Asignado: <?= $tarea['asignado'] ; ?> <br>
                    Fecha: <?= $tarea['fecha'] ; ?> <br>
                    Completado: 
        <!-- Operador Ternario-->
         <?= ($tarea['completado'] === true )  ? 'Tarea realizada' : 'Tarea no realizada'; ?>
        
              
            </li>
            </ul>
        
        <?php endforeach; ?>
        

</ul>

</main>
    
    <footer>
        
    </footer>
        
    
 
 </body>
 </html>