<?php

define("NUMDOLLS", 2);

require_once("ChocolateCake.php");

class WeddingCake extends ChocolateCake{

	

	var $numLayers, $genderDoll1, $genderDoll2;

	function __construct($numLayers, $genderDoll1, $genderDoll2, $typeOfChocolate, $shape){

		$this->numLayers = $numLayers;
		$this ->$genderDoll1  = $genderDoll1;
		$this ->$genderDoll2  = $genderDoll2;
		parent::__construct($typeOfChocolate, $shape);
	}

	function placeDolls(){
		echo NUMDOLLS . " dolls placed on the cake <br />";
	}

	function addLayers(){

		echo "Adding $this->numLayers layers <br/>";
	}

	function shipIt(){

		$this->addLayers();
		$this->placeDolls();
		parent::shipIt();
	}

}

$test = new WeddingCake(4, "Male", "Female", "White", "Round");
$test->shipIt();         
