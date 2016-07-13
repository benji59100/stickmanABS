<?php

/**
* 
*/
interface vAttributes
{
	public $iCurrent;
	public $iInit;
	public $iMax;
	public $iMin;
	public $eType;
	public const $eType = array('strength','life');

	function __construct(argument)
	{
		# code...
	}
}

?>