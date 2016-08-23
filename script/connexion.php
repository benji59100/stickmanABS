<?php 
include("../includes/ini.php");

if((isset($_POST['login'],$_POST['pwd'])) && ($_POST['login'] !="" || $_POST['pwd']!= ""))
{
	$username = $_POST['login'];
	$password = md5($_POST['pwd']);
    $verif = $connexion->prepare("SELECT * FROM compte WHERE Username = '$username' AND Password = '$password'");
    $verif->execute();
    $resultat = $verif->fetch();
    $login = $resultat['Username'];
    $pwd = $resultat['Password'];
    if($pwd == $password && $login == $username)
    {
        session_start();
        $reponse = 'OK';
    }
    else
    {
        $reponse = 'echec';
    }
}
else 
{
    $reponse = 'Un champ est manquant';
}

echo json_encode(['reponse' => $reponse]);
?>