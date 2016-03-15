<?php

// If I dont want you to instantiate the Parent class Animal then i will make it abstract
abstract class Animal{

	abstract protected function getCategory();

}

class Tiger extends Animal{

	public function getCategory()
	{
		return 'Wild';
	}

}

class Lizard extends Animal{

	public function getCategory()
	{
		return 'Reptile';
	}


}

class Cow extends Animal{

	public function getCategory()
	{
		return 'Pet';
	}

}

//echo (new Tiger('wild'))->getCategory();
echo (new Cow)->getCategory();
//new Animal;
?>