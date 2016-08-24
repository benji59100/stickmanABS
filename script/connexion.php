<?php 
include("../includes/ini.php");

if((isset($_POST['login'],$_POST['pwd'])) && ($_POST['login'] !="" || $_POST['pwd']!= ""))
{
	$username = $_POST['login'];
	$password = sha1($_POST['pwd']);
    $verif = $connexion->prepare("SELECT * FROM compte WHERE Username = '$username' AND Password = '$password'");
    $verif->execute();
    $resultat = $verif->fetch();
    $login = $resultat['Username'];
    $pwd = $resultat['Password'];
    if($pwd == $password && $login == $username)
    {
        // on est connecter , on ouvre la session et on stock les données de l'utilisateurs dans la session et on redirige.
        $reponse = 'ok';
        session_start();
        $_SESSION['id'] = $resultat['idCompte'];
        $_SESSION['pseudo'] = $resultat['Pseudo'];
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