<?php 

class cCell
{
	public $iPosX; //positionX de la cellule
	public $iPosY; //position Y de la cellule
	public $aovItems =	array(); //Items présent sur la cellule
	public $aoStickmen	= array(); //Stickmen présent sur la cellule

	function __contruct($a,$b)
	{
		$this->iPosX=$a;
		$this->iPosY=$b;

	}
}


?>