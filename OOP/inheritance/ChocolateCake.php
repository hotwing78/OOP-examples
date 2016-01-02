<?php

class ChocolateCake{

	var $typeOfChocolate, $shape;

	function __construct($typeOfChocolate, $shape){
		$this->typeOfChocolate = $typeOfChocolate;
		$this->shape = $shape;
	}

	function bake(){

		echo"baking the cake<br />";
	}

	function addIcing(){
		echo"adding icing to the cake<br /><br /><br />";
	}

	function plateIt(){
		echo"preparing to ship<br /><br />";
	}

	function shipIt(){

		$this->plateIt();
		echo"Ready to ship<br />";
	}
}

/*
$test = new ChocolateCake("dark", "round");
$test->bake();
$test->addIcing();
$test->shipIt();*/
