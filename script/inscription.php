<?php 
//include("../includes/ini.php");

if(isset($_POST['username'],$_POST['password'],$_POST['pseudo'],$_POST['email']))
{
	if(($_POST['username'] !== '') && ($_POST['password'] !== '') && ($_POST['pseudo'] !== '') && ($_POST['email'] !== '')) 
	{
        $reponse = 'ok';
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