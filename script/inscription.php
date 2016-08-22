<?php 
include("../includes/ini.php");

if(isset($_POST['username'] && $_POST['password'] && $_POST['pseudo'] && $_POST['email']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pseudo = $_POST['pseudo'];
	$email = $_POST['email'];
}

function verifLogin($username,$email)
{
	//Vérification si le login n'est pas déjà utilisé.
	$query = "SELECT * from compte WHERE Username = $username OR Email = $email";
	$verif = $connexion->execute($query);
	$nbrows = count($verif);
	if($nbrows != 0 )
	{
		
	}
	else
	{

	}
}

?>