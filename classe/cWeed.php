<?php
	require_once('vItems.php');

	class cWeed implements vItems
	{
		public $iIdPotion;
		public $iHeal;
		public $sName;
		public $iPrice;
		public $description;
		public function __construct($id,$effect,$name,$price,$description)
		{
			$this->iIdPotion = $id;
			$this->iHeal = $effect;
			$this->sName=$name;
			$this->iPrice = $price;
			$this->description = $description;
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

		public function setDescription($description)
		{
			$this->description = $description;
		}

		public function getDescription()
		{
			return $this->description;
		}
	}

?>



