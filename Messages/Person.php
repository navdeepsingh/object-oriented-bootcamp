<?php


class Person{

	protected $name;

	function __construct($name) {
		$this->name = $name;
	}
}

class Business{
	/**
	 * Business depends upon staff.
	 * We need to undestand here many times we hear class have how many dependencies 	 
	 */

	protected $staff;

	function __construct(Staff $staff) {
		$this->staff = $staff;
	}

	/**
	 * Business hire person, and person added to his staff
	 *
	 **/
	public function hire(Person $person)
	{
		$this->staff->add($person);
	}
	/**
	 *  Business talk to its member $staff 
	 *	and $staff is typecast of Staff class
	 *	and $staff talk to its class function members()
	 */
	public function getStaffMembers()
	{
		return $this->staff->members();
	}
}

class Staff{

	protected $members = [];

	function __construct($members = []) {
		$this->members = $members;
	}
	
	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function members()
	{
		return $this->members;
	}
}

$navdeep = new Person('Navdeep Singh');

$staff = new Staff([$navdeep]);

$nswebstudio = new Business($staff);

$nswebstudio->hire(new Person('Sarabjit Kaur'));

var_dump($nswebstudio->getStaffMembers());

?>