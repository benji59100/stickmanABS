<?php
error_reporting(0);

    session_start();
	define('ROOT_DIR', 'C:/wamp64/www/stickmanABS/');
    include_once ROOT_DIR.'includes/ini.php';
    include_once ROOT_DIR.'classe/cShop.php';
    include_once ROOT_DIR.'classe/cWeapon.php';
    include_once ROOT_DIR.'classe/cWeed.php';
    function getBaseWeapon($connect)
    {
    	
    	$data_shop = $connect->prepare("SELECT * FROM items WHERE type ='weapon'");
    	$data_shop->execute();
    	$resultat = $data_shop->fetchAll();
    	return $resultat;
    }

    function getBaseWeed($connect)
    {
    	$data_shop = $connect->prepare("SELECT * FROM items WHERE type ='weed'");
    	$data_shop->execute();
    	$resultat = $data_shop->fetchAll();
    	return $resultat;
    }
    //récupération de toute les armes
    $weapons = getBaseWeapon($connexion);
    //récupéaration de toute la weed :D !
    $weed = getBaseWeed($connexion);

    $i=0;
    $weedArray = array();
    $weaponArray = array();
    foreach($weed as $row)
    {
    	$idItem = $row['idItem'];
        $nameItem = $row['Name'];
        $priceItem  = $row['Value'];
        $effect = $row['Effect'];
        $descriptionItem = $row['Description'];
        $weedArray[$i] = new cWeed($idItem,$effect,$nameItem,$priceItem,$descriptionItem);
        $i++;
    }

    $i=0;
    foreach($weapons as $row)
    {
        $idItem = $row['idItem'];
        $nameItem = $row['Name'];
        $priceItem  = $row['Value'];
        $effect = $row['Effect'];
        $descriptionItem = $row['Description'];
        $weaponArray[$i] = new cWeapon($idItem,$effect,$nameItem,$priceItem,$descriptionItem);
        $i++;
    }

    //création du magasin
    $shop = new cShop($weaponArray,$weedArray);



?>
