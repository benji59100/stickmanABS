<?php

interface vItems
{
//      public $sName;
//	public $iPrice;
//	public const $eType = array('weapon','potion');
    public function setItem($name_potion, $value_potion);     
    //public function getName($name_potion);
    public function getHtml($template);

    
}

?>