<?php
class Asignado {

	private $id;
	private $nombre;
	private $puesto;


public function setId($valor)
     {
    	$this->id = $valor;
   	 }

    public function getId()
    	{
        return $this->id;
    	}

    	public function setNombre($valor)
     {
    	$this->nombre = $valor;
   	 }

    public function getNombre()
    	{
        return $this->nombre;
    	}
    	public function setPuesto($valor)
     {
    	$this->puesto = $valor;
   	 }

    public function getPuesto()
    	{
        return $this->puesto;
    	}
    }