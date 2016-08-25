<?php
 define('ROOT_DIR', 'C:/wamp64/www/stickmanABS/');
 include(ROOT_DIR.'includes/ini.php');

class cCell
{
	public $iPosX; //positionX de la cellule
	public $iPosY; //position Y de la cellule
	public $aovItems =	array(); //Items présent sur la cellule
	public $aoStickmen	= array(); //Stickmen présent sur la cellule

	public function __contruct($a,$b)
	{
		$this->iPosX=$a;
		$this->iPosY=$b;


	}

	public function getCellItems()
	{
		return $this->aovItems;
	}

	public function setCellItems()
	{
		
	}
	public function getCellSticman()
	{
		return $this->aoStickmen;
	}
}

$cell = new cCell();
var_dump($cell);


?>