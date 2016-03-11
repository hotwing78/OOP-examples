<?php

class Patient{

	var $name;
	private $id, $meds;

	function __construct($name, $id, $meds){
		$this->name = $name;
		$this->id = $id;
		$this->meds = $meds;
	}

	function getId(){return $this->id;} //Writing this way saves space

	function setMeds($meds){$this->meds = $meds;}

	function getMedsWithId($identify){
		if($identify == $this->id)
			echo "Patient needs: " . $this->getMeds();
		 else {
			echo "ID not found."; //can also be stated as return instead of echo.
		}
	}

	function getMeds(){ return $this->meds;}
}

$pat = new patient("Damon", 40, 'Chill Pill');


$pat->getMedsWithId(40);

/*
<!-- class patient
- name
- id - private
- meds - private
- __construct
- getter for id
- setMeds(meds)
- getMeds(id)
	- compare id from user to id stored
		-true: return Med info
		-false: echo Wrong info
 -->*/