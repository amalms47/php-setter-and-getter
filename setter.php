<?php

class Company{

	
	private $employeesal;

	public function __set($employeesal,$value){

		$this->employeesal=$value;
		
	}

	public function __get($employeesal){

		echo $this->employeesal;
	}
}

$obj= new Company();
$obj->sal=20000;
$obj->employeesal;

?>