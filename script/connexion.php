<?php 
include("../includes/ini.php");

if(isset($_POST['login'],$_POST['pwd']))
{
	$username = $_POST['login'];
	$password = $_POST['pwd'];	
    
    if("SELECT * FROM compte WHERE Username=$username AND Password=$password")
    {
        $reponse = 'OK';
    }
    else
    {
        $reponse = 'Un champ est eronné';
    }
}
else 
{
    $reponse = 'Un champ est manquant';
}

echo json_encode(['reponse' => $reponse]);
?>