<?php

require_once("Product.php");

class Book extends Product{
	var $numPages, $author;

	function __construct($numPages, $author, $id, $price){
		$this->numPages =$numPages;
		$this->authoer = $author;
		parent::__construct($id, $price);
	}
}