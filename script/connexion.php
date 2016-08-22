<?php 
include("../includes/ini.php");

if(isset($_POST['login'] && $_POST['pwd']))
{
	$username = $_POST['login'];
	$password = $_POST['pwd'];	
}

?>