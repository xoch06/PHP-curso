
 	<?php
 require 'functions.php';
 

 //$pdo = connectDB();

 //$tareas =ListaTareasCompletadas ($pdo);
 class Tarea {
 	//Variables- Atributos
 	public $id = 5;
 	public $descripcion = 'esta es una tarea';
 	public $asignado = 'Xochitl';
 	public $completado = 0;
 	public $fecha = '2017-08-20';
 
 //Funciones- Metodos

 	public function verAsignado()
 	{
 		echo "El asignado es:" . $this-> asignado;
    }

    public function setDescripcion($valor)
     {
    	$this->descripcion = $valor;
   	 }

    public function getDescription()
    	{
        return $this->decripcion;
    	}

    public function setAsignado($valor
    {
         $this->asignado = $valor;
    }
   public function getAsignado()
    	{
        return $this->asignado;
    	}

      }
//crea objetos
$tarea1 = new Tarea();
$tarea2 = new Tarea();
 
 //asignamos sus datos

echo $tarea1->getDescripcion . "<br>";
echo $tarea2->getDescripcion .   "<br>";
     
//$tarea1->descripcion = "Ir al supermercado";

$tarea1->setDescripcion("Ir al supermercado");
$tarea2->setDescripcion("Comprar pan");

  
echo $tarea1->getDescripcion . "<br>";
echo $tarea2->getDescripcion;    

$tarea1->setAsignado("xochitl");
$tarea2->setAsignado("Luis");




//require 'index.view.php';

 	
