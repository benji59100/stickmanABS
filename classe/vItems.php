<?php

interface vItems
{
	public function setName($name);
	public function setPrice($price);
	public function setDescription($description);
	public function getName();
	public function getPrice();
	public function getDescription();
}

?>