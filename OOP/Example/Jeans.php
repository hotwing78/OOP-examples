<?php

require_once("Apparel.php");

class Jeans extends Appareal{
	
	var $numPockets;

	function __construct($numPockets,$size, $color, $id, $price){

		$this->numPockets = $numPockets;
		parent::__construct($size, $color, $id, $price);
	}

}

$levi = new Jeans(8, "M", "Blue", "l32", 300);
echo $this->getPrice(). "<br/>";
$levi-> sale(20);