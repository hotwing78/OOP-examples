<?php

class User{

	var $firstName, $lastName;
	private $userName, $password;
	

	function __construct($userName,$password,$firstName,$lastName){
		$this->userName = $userName;
		$this->password = $password;
		$this->firstName = $password;
		$this->lastName = $lastName;
	}

	function setPassword($newPassword){
		$this->newPassword = password;
	}

	function setUserName($newUser){
		$this->newUser = userName;
	}
	
	function getPassword(){
		return $this->password;
	}
	function getUserName(){
		return $this->userName;
	}

	
	function getName(){
		return "$this->firstName $this->lastName <br />";
	}

	function logIn($pass){
		if($pass == $this->password){
			echo "Log In Successful <br />";
			} else {
				echo "Log in Failed  <br />";
			}
		
	}
}

$damon = new User("Dlwingo", "hello", "Damon", "Wingo");

$damon->logIn("hello");

$damon->logIn("whatever");

echo $damon->getName();