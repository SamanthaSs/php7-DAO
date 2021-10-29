<?php

class Sql extends PDO{

	private $conn;

	public function __construct(){ //conexão com o banco de dados

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	}

	private function setParams($statments,$paramenters=array()){

		foreach ($paramenters as $key => $value) {
			
			$this->bindParam($key,$value);

		}

	}

	private function setParam($statments,$key,$value){

		$statments->bindParam($key,$value);

	}

	public function query($rawQuery,$params=array()){

		$stmt= $this->conn->prepare($rawQuery);

		$this->setParams($stmt,$params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery,$params=array()):array{

		$stmt=$this->query($rawQuery,$params);

		return $stmt -> fetchAll(PDO::FETCH_ASSOC);


	}


}




?>