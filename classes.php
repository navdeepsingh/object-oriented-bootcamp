<?php 
// class is declared with Runner name
class Runner{

	// variable is declared with public scope
	// can be called from outside of class
	public $description;	

	public function __construct($description){
		$this->description = $description;
	}
}

// Created an instance of class Runner
// Instantiated the class
$runner = new Runner('Sprinter');
var_dump($runner->description);
?>