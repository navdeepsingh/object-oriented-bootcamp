<?php


class Animal{

	public $category;

	public function getCategory()
	{
		return $this->category;
	}

}

class Tiger extends Animal{

	public function __construct($category) {
		$this->category = $category;
	}

}

class Lizard extends Animal{

	public function __construct($category) {
		$this->category = $category;
	}

}

class Cow extends Animal{

	public function __construct($category) {
		$this->category = $category;
	}

}

//echo (new Tiger('wild'))->getCategory();
echo (new Lizard('reptile'))->getCategory();
?>