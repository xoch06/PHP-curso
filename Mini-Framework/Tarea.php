<?php
class Tarea {
 	//Variables- Atributos
 	private $id = 5;
 	private $descripcion = 'esta es una tarea';
 	private $asignado = 'Xochitl';
 	private $completado = 0;
 	private $fecha = '2017-08-20';

    
 	//constructor
 	public function __construct($id, $descripcion, $asignado, $completado, $fecha)
    {
      $this->id = $id;
      $this->descripcion = $descripcion;
      $this->$asignado = $asignado;
      $this->completado = $completado;
      $this->fecha = $fecha;


    }
 //Funciones- Metodos

 	public function verAsignado()
 	{
 		echo "El asignado es:" . $this-> asignado;
    }

    public function setDescripcion($valor)
     {
    	$this->descripcion = $valor;
   	 }

    public function getDescripcion()
    	{
        return $this->descripcion;
    	}

    public function setAsignado($valor)
    {
         $this->asignado = $valor;
    }
   public function getAsignado()
    	{
        return $this->asignado;
    	}
 public function setId($valor)
     {
    	$this->id = $valor;
   	 }

    public function getId()
    	{
        return $this->id;
    	}

   public function setCompletado($valor)
     {
    	$this->completado = $valor;
   	 }

    public function getCompletado()
    	{
        return $this->completado;
    	}

    	 public function setFecha($valor)
     {
    	$this->fecha = $valor;
   	 }

    public function getFecha()
    	{
        return $this->fecha;
    	}


}
