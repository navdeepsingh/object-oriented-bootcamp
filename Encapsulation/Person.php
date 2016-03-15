<?php


class Person{

	// If we change the scope of variable then cant access that variable directly as $person->age
	private $name;

	private $age;

	function __construct($name) {
			$this->name = $name;
		}	

	/**
	 * getter function
	 * If we need age in terms of days instead years then getter is very supportive function
	 * @return void
	 * @author 
	 **/
	function getAge()
	{
		return $this->age * 365;
	}

	/**
	 * setter function
	 *
	 * @return void
	 **/
	function setAge($age)
	{
		if ($age < 18):
			throw new Exception("Your age is not enough to go through", 1);
		else:			
			$this->age = $age;
		endif;
	}
}

$person = new Person('Navdeep Singh');
$person->setAge(30);

// we can set age directly too which is not accepted and here concept of encapsulation comes.
$person->age = 3;

var_dump($person->getAge())
;
?>