<?php
error_reporting(0);
    require('../classe/cStickman.php');
	define('ROOT_DIR', 'C:/wamp64/www/stickmanABS/');
    include ROOT_DIR.'includes/ini.php';

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
    var_dump($stat[0]['id_champion']);
    $idChampion = $stat['id_champion'];
    $idcompteChampion = $stat['id_compte'];
    $nameChampion = $stat['Name'];
    $strengthChampion = $stat['Strength'];
    $lifeChampion = $stat['Life'];
    $pointsChampion = $stat['Point'];
    $actionPointsChampion = $stat['ActionPoint'];
    $movePointChampion = $stat['MovePoint'];
    $victoriesChampion = $stat['Victories'];
    $defeatsChampion = $stat['Defeats']; 
    //$stickman = new cStickman($idcompteChampion,$idChampion,$nameChampion,$strengthChampion,$lifeChampion);
    //function __construct($id_compte, $id_champion, $Name, $Strengh, $Life, $Points, $Victories, $ActionPoint, $MovePoint, $Defeats)

    


?>