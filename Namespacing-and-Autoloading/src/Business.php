<?php 

namespace Green;


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


?>