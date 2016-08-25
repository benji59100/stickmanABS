<?php
require_once('vItems.php');
	
	class cWeapon implements vItems
	{
		public $iIdWeapon;
		public $iDamage;
		public $sName;
		public $iPrice;
		public $description;

		function __construct($id,$effect,$name,$price,$description)
		{
			$this->iIdWeapon = $id;
            $this->iDamage = $effect;
            $this->sName=$name;
			$this->iPrice = $price;
			$this->description = $description;
		}

		public function shot($iIdStickman)
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