<?php
    include '../../includes/ini.php';
    
    $data_shop = $connexion->prepare("SELECT * FROM items");
    $data_shop->execute();
    
    $resultat = $data_shop->fetchAll();
    var_dump($resultat);
//    $i = 0;
//        foreach ($resultat as $row) {
//           $objet = new item(Name);
//           $item[$i] = $objet;
//            
//        
//    }

?>
