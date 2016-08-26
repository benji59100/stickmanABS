<?php

/**
* 
*/
class cStickman
{
	
	public $aovItems = array();
	public $aovAttributes = array();
	public $iActionPoint= 0;
	public $iMovePoint = 0;
	public $iPoints = 0 ;
	public $sName;
	public $iVictories = 0;
	public $iDeafeats = 0;
        public $Life = 5;
        public $Strengh = 1;

	function __construct($id_compte, $id_champion, $Name, $Strengh, $Life, $Points, $Victories, $ActionPoint, $MovePoint, $Defeats)
	{
        $id_compte = $SESSION['id'];
		$Name = $sName;
        $aovAttributes = [$Strengh,$Life];
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