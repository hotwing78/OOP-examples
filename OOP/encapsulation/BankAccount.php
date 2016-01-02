<?php



class BankAccount {

	private $balance, $accountNumber, $rountingNumber, $owner, $type;

	function __construct($balance, $accountNumber, $rountingNumber, $owner, $type){

		$this->balance = $balance;
		$this->accountNumber = $accountNumber;
		$this->rountingNumber = $rountingNumber;
		$this->owner = $owner;
		$this->type = $type;

	}

	function getBalance(){
		return $this->balance;
	}

	function setType($newType){

		 $this->type = $newType;
	}

	function getType(){
		return $this->type;
	}

	function deposit($amount){

		$this->balance = $this->balance + $amount;

	}

	function withdraw($amount){

		$this->balance = $this->balance - $amount;
	}

}

$testBA = new BankAccount(100, 1234567, 890, "Test", "Checking");

echo $testBA->getBalance() . "<br />";
echo $testBa->getType() . "<br />";
$testBa->setType("Savings");
echo $testBa->getType();