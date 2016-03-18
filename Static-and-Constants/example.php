<?php

/*
*   Accessing method directly without instantiating the object, we need to declare that method static
*	Below is best example to use of static method
*
*/
class String{

	public static function lower($str){
		return mb_strtolower($str);
	}

}

//echo String::lower('Navdeep Singh');


/*
*	Sometime its risky to declare variable/method as static as it needs not to be changed
*	So in that cases we uses CONST
*	In below example we can change tax
*/

class Bill{

	public $education_cess = 0.8;

	// but if we declare new tax value

	CONST DEFENCE = 1.2;

	public function getEducationCess()
	{
		return $this->education_cess;
	}

}

$bill = new Bill;
//echo Bill::education_cess;
// Here we cant change value of DEFENCE tax
echo Bill::DEFENCE; //