<?php
include ('../includes/ini.php');
include ('./vItems.php');
/**
* 
*/
class cShop implements vItems
{
	public $aovItemsWeapons = array();
	public $aovItemsWeed = array();
	public $aovAttributes = array();
        
          

	 public function __construct()
        {
             
                       
        }

	public function Buy()
	{
		//acheter un objet
	}
        
         public function setItem($name_potion, $value_potion){
              $this->aovItemsWeed[$name_potion] = $value_potion;
              
             
         }
         public function getHtml($template)
    {
        foreach($this->aovItemsWeed as $name_potion => $value) {
            $template = str_replace('{' . $name_potion . '}', $value, $template);
        }

        return print_r($template);
    }
        
        
       
}


        
?>