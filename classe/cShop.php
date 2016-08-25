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

	public function __construct($tableau)
    {
        
        $this->aovItemsWeed = $tableau;
    }

    public function getItems($name,$price)
    {
        return $this->aovItemsWeed;
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