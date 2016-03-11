<?php

require_once("InterGalacticRobot.php");

class InterGalacticDeliveryRobot implements InterGalacticRobot{


 	function speak(){

 		echo "Where's the booze? <br/>";
 	}
 	function action(){

 		echo "drink";
 	}
 }

 $bender = new InterGalacticDeliveryRobot();

 $bender->speak();

 $bender->action();