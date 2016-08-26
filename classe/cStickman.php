<?php

/**
* 
*/
class cStickman
{
	public $id;
	public $id_champion;
	public $aovItems = array();
	public $aovAttributes = array();
	public $iActionPoint= 0;
	public $iMovePoint = 0;
	public $iPoints = 0 ;
	public $sName;
	public $iVictories;
	public $iDeafeats;
    public $Life;
    public $Strength;

	function __construct($id_compte,$Name,$idChampion='',$Strength=1, $Life=5, $Points=0, $Victories=0, $ActionPoint=0, $MovePoint=0,$Defeats=0)
	{
		$this->id_champion = $idChampion;
		$this->id = $id_compte;
		$this->sName = $Name;
        $aovAttributes = [$Strength,$Life];
        $this->iPoints = $Points;
        $this->iActionPoint = $ActionPoint;
        $this->iMovePoint = $MovePoint;
        $this->iVictories = $Victories;
        $this->iDeafeats = $Defeats;
        $this->Life = $Life;
        $this->Strength = $Strength;
	}

	public function move($iX,$iY)
	{
		$posStickman = $this->getCellSticman();
        if($iX - $posStickman[0] && $iY - $posStickman[1] <= 5) {
            
            $afterMoveX = $iX;
            $afterMoveY = $iY;
            
        }else{
            return ERROR;
        }
	}

	public function look()
	{
		$posItems = $this->getCellItems();
        $posStickman = $this->getCellSticman();
        if( $posItems[0] == $posStickman[0] && $posItems[1] == $posStickman[1]) {
            
            
        }else{
            return ERROR;
        }
	}

	public function protect()
	{
		//se protéger d'un montant spécifique de dégats
	}
	
	public function attack($iIdStickman)
	{
		//attque en fonction des dégats de l'arme
	}

	public function grab($iIdItem)
	{
		//récupèr eun item en fonction de son ID et l'ajoute dans l'inventaire
	}

	public function useitem($iIdItem)
	{
		//utilise un item
	}

	public function leave()
	{
		//abandon de l'arène
	}

	private function imDying()
	{
		//perso mort
	}

	public function getPos()
	{
		//retourne la position d'un stickman
	}


}

?>