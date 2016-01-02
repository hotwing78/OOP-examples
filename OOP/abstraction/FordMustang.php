<?php

require_once('Cars.php');

class FordMustang extends Cars{

	var $engine, $fuelType, $doorType;

	function __construct($engine, $fuelType, $doorType, $numDoors){

		$this->engine = $engine;
		$this->fuelType = $fueLType;
		$this->doorType = $doorType;
		$this->numDoors = $numDoors;
		define('MAKE', 'Ford');
		define('MODEL', 'Mustang');
	    parent::__construct(MAKE, MODEL, $numDoors);
	}

	function start(){echo 'Vroom </br>';}

	function brake() {echo 'Screeech </br>';}

	function openDoors(){echo "Opening $this->doorType </br>";}
}


$testFM = new FordMustang('V8', "Unleaded", "sideWays", 2);

$testFM->start();
$testFM->openDoors();
$testFM->printMakeAndModel();