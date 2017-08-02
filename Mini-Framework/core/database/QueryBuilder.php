<?php
class QueryBuilder
{
	private $pdo;

	public function __construct($pdo)
	{
		 $this->pdo =$pdo;
	}
	public function selectAll($table)
	{
		$sentencia = $this->pdo->prepare("SELECT * FROM {$table} ");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_CLASS);
	}
     
    public function insert($table, $parameters)
	{
	  $columns = implode(', ', array_keys($parameters));
	  $values = ':' . implode(', :', array_keys($parameters));
	  // :nombre, :edad, :domicilio
	  $sql = sprintf('INSERT INTO %s (%s) VALUES(%s)', $table,$columns,$values);

	  try   {
	  		$sentencia =$this->pdo->prepare($sql);
			$sentencia->execute($parameters);
	   } catch (Exception $e) {
	   	 dd($e->getMessage);
	   }
	   

	}
}