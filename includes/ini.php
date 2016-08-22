<?php 


include("constante.php");
function __autoload($class_name) {
    include '../classe'.$class_name . '.php';
}
 

$connexion =  new PDO('mysql:host='.HOST.';dbname='.DBNAME,DB_USER,DB_PASSWORD);

//var_dump($connexion);



?>