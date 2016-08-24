<?php 
include("../includes/ini.php");

$this->session->sess_destroy();
echo '<script type="text/javascript">window.alert("Vous etes deconnecte");</script>';
header('Location: ../index.html');

?>