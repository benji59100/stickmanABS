<?php

interface vItems
{
	public $sName;
	public $iPrice;
	public const $eType = array('weapon','potion');

	public function setItem($name,$price);

	public function setItemName($name);

	public function setItemPrice($price);
	
	public function getItemName($name);

	public function getItemPrice($price);
}

?>