<?php 

include("constante.php");
function __autoload($class_name) {


    
}

 
 echo 'passe dans le ini.php';
 echo '<br>';
$connexion =  new PDO('mysql:host='.HOST.';dbname='.DBNAME,DB_USER,DB_PASSWORD);

//var_dump($connexion);



?>