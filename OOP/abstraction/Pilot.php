<?php

abstract class Pilot{
	
	var $lastName, $rank;

	function __construct($lastName, $rank){
		$this->lastName = $lastName;
		$this ->rank = $rank;
	}

	function reciteRulesOfPiloting() {echo "Rules??? What Rules?!";}

	
}