<?php

	/**
	* 
	*/
	class cWeed implements vItems
	{
		public $iIdPotion;
		public $iHeal;
		function __construct($id,$effect,$name,$price)
		{
			$this->iIdPotion = $id;
			$this->iHeal = $effect;
			$this->sName=$name;
			$this->
		}

		public function bong()
		{
			
		}

		public function getName()
		{
			return $this->sName;
		}

		public function getPrice()
		{
			return $this->iPrice;
		}

		public function setName($name)
		{
			$this->sName = $name;
		}

		public function setPrice($price)
		{
			$this->iPrice = $price;
		}
	}

?>



