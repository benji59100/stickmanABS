<?php
error_reporting(0);

define('ROOT_DIR', 'C:/wamp64/www/stickmanABS/');
include(ROOT_DIR.'includes/ini.php');

if(isset($_POST['username'],$_POST['password'],$_POST['pseudo'],$_POST['email']))
{
	if(($_POST['username'] != '') && ($_POST['password'] != '') && ($_POST['pseudo'] != '') && ($_POST['email'] != '')) 
	{
        
        
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        
        $verif = $connexion->prepare("SELECT * FROM compte WHERE Username = '$username' OR Pseudo = '$pseudo' OR Email = '$email'");
        $verif->execute();
        $resultat = $verif->fetchAll();


        
        if(count($resultat) != 0){
           
            $reponse = 'echec';
        }
        else{
        $reqInscription = $connexion->prepare("INSERT INTO compte (Username,Password,Pseudo,Email) VALUES ('$username', '$password', '$pseudo','$email')");        
        $reqInscription->execute();
        $reponse = 'ok'; 
        }
        
        
        
    } 
    else 
    {
        $reponse = 'Les champs sont vides';
    }
} 
else 
{
    $reponse = 'Tous les champs ne sont pas parvenus';
}
 
echo json_encode(['reponse' => $reponse]);
?>