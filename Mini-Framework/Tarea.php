<?php
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
