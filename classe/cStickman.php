<?php

/**
* 
*/
class cStickman
{
	
	public $aovItems = array();
	public $aovAttributes = array();
	public $iActionPoint;
	public $iMovePoint;
	public $iPoints;
	public $sName;
	public $iVictories;
	public $iDeafeats;

	function __construct($id_compte, $id_champion, $Name, $Strengh, $Life, $Points, $Victories, $ActionPoint, $MovePoint, $Defeats)
	{
        $id_compte = $SESSION['id'];
		$Name = $sName;
        $aovAttributes{
            
            $Strengh,
            $Life,            
        }
        $Points = $iPoints;
        $ActionPoint = $iActionPoint;
        $MovePoint = $iMovePoint;
        $Victories = $iVictories;
        $Defeats = $iDefeats;
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

	public function use($iIdItem)
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