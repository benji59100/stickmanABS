<?php
include '../includes/ini.php';
/**
* 
*/
class cShop
{
	public $aovItemsWeapons = array();
	public $aovItemsWeed = array();
	public $aovAttributes = array();
        
        private $name_potion;
        private $value_potion;
        

	 public function __construct($idPotion)
        {
            // Récupérer en base de données les infos du membre
            $data_shop = $connexion->prepare("SELECT * FROM items");
            $data_shop->execute();
            $resultat = $data_shop->fetchAll();

            // Définir les variables avec les résultats de la base
            $this->name = $resultat['Name'];
            $this->value = $resultat['Value'];
            // etc.
        }

	public function Buy()
	{
		//acheter un objet
	}
}

?>