<?php

class cConnexion{
    
    private $host;
    private $dbname;
    private $user;
    private $mdp;
    
    public function __construct()
    {
        try {
            $dbh = new PDO('mysql:host=$host;dbname=$dbname', $user, $mdp);
            
            
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    } 
    
}


?>