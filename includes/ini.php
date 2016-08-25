<?php 
define('ROOT_DIR', 'C:/wamp64/www/stickmanABS/');
include(ROOT_DIR."includes/constante.php");
 
 echo 'passe dans le ini.php';
 echo '<br>';
$connexion =  new PDO('mysql:host='.HOST.';dbname='.DBNAME,DB_USER,DB_PASSWORD);

//var_dump($connexion);



?>