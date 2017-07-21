<?php
class Tarea {
 	//Variables- Atributos
 	private $id;
 	private $descripcion;
 	private $asignado;
 	private $completado;
 	private $fecha;

    
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
