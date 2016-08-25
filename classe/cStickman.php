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
        /* $id_champion a recup de data_profil dans le row */
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
		//se déplacer aux coordonées
	}

	public function look()
	{
		//regarde sur la cellule ce qui est présent
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