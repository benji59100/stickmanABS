<?php
error_reporting(0);

    session_start();
    var_dump($_SESSION);
	define('ROOT_DIR', 'C:/wamp64/PhpProject1/www/stickmanABS/');
    include_once ROOT_DIR.'includes/ini.php';
    include_once ROOT_DIR.'classe/cShop.php';
    include_once ROOT_DIR.'classe/cWeapon.php';
    include_once ROOT_DIR.'classe/cWeed.php';
    
    
    
    
    $Name = $_POST['stickmanName'];
    
    var_dump($Name);
    
    $stickman = new cStickman(); 
    
    function setNewChamp($connect)
    {    	
    	$data_newChamp = $connect->prepare("INSERT INTO champion VALUES('','','$Name','','','','','','','')");
    	$data_newChamp->execute();
    	
    }
    
     $newChamp = setNewChamp($connexion);