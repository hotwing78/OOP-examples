<?php

require_once('Pilot.php');
require_once('ISafetyOfficer.php');

class C17Pilot extends Pilot implements ISafetyOfficer{
	
  	var $uniformColor;

    function __contruct($uniformColor, $lastName, $rank){
    	$this->uniformColor = $uniformColor;

    	parent::pilot($lastName,$rank);
    }

    function flyC17(){echo "Flying";}

    function dance(){echo "dance monkey dance!";}

    function inspect(){echo "Don't mean to be a prick but I should check";}
}

topGun = new C17Pilot('blue','wingo','CPT');
topGun->flyC17();
topGun->reciteRulesOfPiloting();