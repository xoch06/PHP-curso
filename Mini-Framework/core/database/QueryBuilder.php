<?php
class QueryBuilder
{
	private $pdo;

	public function __construct($pdo)
	{
		 $this->pdo =$pdo;
	}
	public function selectAll($table, $intoClass)
	{
		$sentencia = $this->pdo->prepare("SELECT * FROM {$table} ");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}

}