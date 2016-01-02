<?php

require_once("Product.php");

class Apparel extends Product{

	protected $size, $color;

	function __construct($size, $color, $id, $price){

		$this->size = $size;
		$this->color = $color;
		parent::__construct($id,$price);
	}


	
}