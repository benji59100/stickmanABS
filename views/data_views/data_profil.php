<?php
error_reporting();
	define('ROOT_DIR', 'C:/wamp64/www/stickmanABS/');
    include ROOT_DIR.'includes/ini.php';

    session_start();
    $id = $_SESSION['id'];

    function getStat($connect, $id) {
        
        $dataStat = $connect->prepare("SELECT * FROM champion WHERE id_compte =".$id);
        $dataStat->execute();
        $resultat = $dataStat->fetchAll();
        return $resultat;
        
    }

    function deleteItems($connect) {
        
        /* Modifier la base de donnée si on a le temps ajouter des checkbox aux case retourner la valeur on detruira
        l'item associer a l'id de la case*/
        
        $deleteItems = $connect->prepare("DELETE ?? FROM inventory WHERE ??");
        $resultat = $deleteItems->execute();
        
        if($resultat == TRUE){
             
            $resultat = "The item has been destroyed";
        }else{
            
            $resultat = "The item couldn't been destroyed";
        }
        return $resultat;
    }

    $stat = getStat($connexion,$id);
    var_dump($stat);


    /*$i = 0;
    foreach($stat as $row)
    {
    	var_dump($row);
    }*/


?>