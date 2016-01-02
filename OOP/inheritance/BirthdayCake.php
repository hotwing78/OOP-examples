<?php

require_once("ChocolateCake.php");

Class BirthdayCake extends ChocolateCake{

	var $numCandles, $name, $toppings;

	function __construct($numCandles, $name, $toppings, $typeOfChocolate, $shape){
		$this->numCandles = $numCandles;
		$this->name = $name;
		$this->toppings = $toppings;
		parent::__construct($typeOfChocolate, $shape);

	}

	function addName(){
		echo "Putting $this->name's name on cake <br />";
	}

	function addCandlesAndToppins(){

		echo "Adding $this->numCandles candles and $this->toppings topping <br />";
    }

    function shipIt(){

       $this->addName();
       $this->addCandlesAndToppins();
       parent::shipIt();
    }

}

$test = new BirthdayCake(22, "Ron", "Butter", "White", "Triangle");
$test->shipIt();