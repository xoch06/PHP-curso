
 	<?php
 require 'functions.php';
 

 $pdo = connectDB();

 $tareas =ListaTareasCompletadas ($pdo);
      

require 'index.view.php';

 	
