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
		foreach($i>=$iSizeArenaWidth;$i++)
		{
			foreach($j>=$iSizeArenaHeight;$i++)
			{
				$cell[$i][$j] = new cCell($i,$j);
				//tryng something
			}
		}
	}

	public function SpawnStickmen()
	{
        $currentNbStickmanArena = count($aovStickmen);
		mixed array_rand ( array cell[$i][$j], int $num = $currentNbStickmanArena)
	}

	public function SpawnItems()
	{
        $minItems = 0;
        $maxItems = 5;
        $randWeed = rand($minItems,$maxItems);
        $randweapons = rand($minItems,$maxItems);
        /* Manque l'appel de d'objet de weed et weapons (les cell ont juste été choisis) */
		mixed array_rand ( array cell[$i][$j], int $num = $randWeed);
        mixed array_rand ( array cell[$i][$j], int $num = $randweapons);
	}

	public function getMaxWeaponStrength()
	{
		//retourne la valeur maximal de la force de l'arme
	}

	public function isFull($nbStickman)
	{
        $currentNbStickmanArena = count($aovStickmen);
		if( $currentNbStickmanArena == $iMaxStickman) {
            
            return TRUE;
            
        }else {
            
            return FALSE;
        }
	}
    
    pubic function isMin($nbStickman)
    {
        $currentNbStickmanArena = count($aovStickmen);
        if( $currentNbStickmanArena == $iMinStickman) {
            
            return TRUE;
            
        }else {
            
            return FALSE;
        }
        
    }
}
?>