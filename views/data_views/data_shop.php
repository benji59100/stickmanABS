<?php
error_reporting(0);
	define('ROOT_DIR', 'C:/wamp64/www/stickmanABS/');
    include ROOT_DIR.'includes/ini.php';
    include ROOT_DIR.'classe/cShop.php';
    include ROOT_DIR.'classe/cWeapon.php';
    include ROOT_DIR.'classe/cWeed.php';



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

    //création du magasin
    //$shop = new cShop();

    //récupération de toute les armes
    $armes = getBaseWeapon($connexion);

    //récupéaration de toute la weed :D !
    $weed = getBaseWeed($connexion);

    $i=0;
    foreach($weed as $row)
    {
    	var_dump($row);
    	$iditem = $row['idItem'];
    	
    	$item = new cWeed();
    }
    /*$i=0;
    foreach($weapon as $row)
    {
    	var_dump($row[$i]);
    	$i++;
    }*/


    



?>
