<?php

/**
* 
*/
class cStickmanArena
{
	private $iSizeArenaWidth; 	//taille en largeur de l'arène
	private $iSizeArenaHeight;	//taille en hauteur de l'arène
	public $aoStickmen = array(); //
	private $iMinStickman;
	private $iMaxStickman;
	
	function __construct()
	{

		$iSizeArenaHeight=24;
		$iSizeArenaWidth=24;
		$iMaxStickman=24;
		$iMinStickman=8;
		$i=0;
		$j=0;
		foreach($i>=24;$i++)
		{
			foreach($j>=24;$i++)
			{
				$cell[$i][$j] = new cCell($i,$j);
				//tryng something
			}
		}
	}

	public function SpawnStickmen()
	{
		//définit le point de spawn des stickmen
	}

	public function SpawnItems()
	{
		//spawn les items dans l'arène sur les cellules
	}

	public function getMaxWeaponStrength()
	{
		//retourne la valeur maximal de la force de l'arme
	}

	public function isFull()
	{
		//l'arène est complète( joueur max atteint)
	}
}
?>