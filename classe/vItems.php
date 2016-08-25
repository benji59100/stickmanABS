<?php

interface vItems
{

	public $sName;
	public $iPrice;
	public const $eType = array('weapon','potion');



	public function setName($name);
	public function setPrice($price);
	public function getName();
	public function getPrice();
}

?>