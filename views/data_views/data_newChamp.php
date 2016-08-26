<?php
error_reporting();
    
    session_start();
	define('ROOT_DIR', 'C:/wamp64/www/stickmanABS/');
    include_once ROOT_DIR.'includes/ini.php';
    include_once ROOT_DIR.'classe/cStickman.php';
    $id = $_SESSION['id'];
    $_POST['stickmanName']='test';
    $Name = $_POST['stickmanName'];

    //on instancie l'objet stickmaan, on récupère l'id du compte , et on donne un nom à notre stickman , la classe s'occupe de donnée les valeurs de base aux
    //nouveaux stickman.
    $stickman = new cStickman($id,$Name);
    var_dump($stickman);



    //On récupère les stats de l'objet.
    $stickmanIdCompte = $stickman->id;
    $stickmanName = $stickman->sName;
    $stickmanIdChampion = $stickman;
    $stickmanPoints = $stickman->iPoints;
    $stickmanActionPoints = $stickman->iActionPoint;
    $stickmanMovePoints = $stickman->iMovePoint;
    $stickmanDefeats = $stickman->iDeafeats;
    $stickmanLife = $stickman->Life;
    $stickmanStrength =$stickman->Strength;

    
    /*function setNewChamp($connect)
    {    	
    	$data_newChamp = $connect->prepare("INSERT INTO champion VALUES('','','$Name','','','','','','','')");
    	$data_newChamp->execute();
    	
    }
    
     $newChamp = setNewChamp($connexion);*/