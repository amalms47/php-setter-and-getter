<?php

class Student{


	private $name;

	public function setname($val){

		$this->name=$val;
	}

	public function getname(){

		echo $this->name;
	}

}

$ob= new Student();
$ob->setname("new value");
$ob->getname();


?>
