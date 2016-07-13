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
	
	function __construct(argument)
	{
		# code...
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