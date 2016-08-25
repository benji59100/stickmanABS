<?php
include(ROOT_DIR.'includes/ini.php');
/**
* 
*/
class cShop
{
	public $aovItemsWeapons = array();
	public $aovItemsWeed = array();
	public $aovAttributes = array();

	public function __construct($tableauWeapons,$tableauWeed)
    {
        
        $this->aovItemsWeed = $tableauWeed;
        $this->aovItemsWeapons = $tableauWeapons;
    }

    public function getItemsWeed()
    {
        return $this->aovItemsWeed;
    }

    public function getItemsWeapons()
    {
        return $this->aovItemsWeapons;
    }

    public function setItemName($name)
    {

    }

    public function setItemPrice($price)
    {

    }
    
    public function getItemName($name)
    {

    }

    public function getItemPrice($price)
    {

    }

}


        
?>