<?php

 class Product {


	private $id, $price;

 	function __construct($id, $price){

 		$this->id = $id;
 		$this->price = $price;

 	}

 	function getPrice(){return $this->price;}

 	function getId(){

 		return $this->id;
 	}

 	function sale($number){

 		echo "This item is now on sale for  $number% off </br>";
 		$priceOff = ($this->price * $number)/ 100;
 		$this->price -= $priceOff;
 	
 	}


}

$test = new Product("j34", "45.00");

echo $test->getPrice()."<br/>";

$test->sale(20);

echo $test->getPrice()."<br/>";