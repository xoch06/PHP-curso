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
 
 <h1>Arreglos Asociativos</h1>
 
 </header>
    
    <main>
    <?php foreach ($persona as $llave => $valor) { ?>
    <p><?= $llave . ":" . $valor; ?></p>
    
    <?php } ?>

    <!--ayuda a dar formato visual para debuggear-->

    <pre>
    <?php var_dump ($tareas); ?>
    </pre>
    <h1> Tareas </h1>

    <ul>
    <?php foreach ($tareas as $tarea) { ?>
    <li> 
    <p>Tarea: <?= $tarea["Tarea"]; ?></p>
     <p>Asignado: <?= $tarea["Asignado"]; ?></p>

    </li>
    <?php } ?>
   
    </ul>


     </main>
    
    <footer>
        
    </footer>
        
    
 
 </body>
 </html>