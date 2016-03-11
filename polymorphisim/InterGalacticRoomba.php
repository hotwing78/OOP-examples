<?php

require_once("InterGalacticRobot.php");

class InterGalacticRoomba implements InterGalacticRobot{



	public static function speak(){

		echo "I AM READY <br/>";
	}

	public static function action(){

		echo "Crush, Kill, Destroy, swag <br/>";
	}
}


$iRobot = new InterGalacticRoomba();

$iRobot->speak();