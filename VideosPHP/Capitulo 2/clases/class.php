<?php

	class dimeAlgo	{
		var $atributo;
		function dimeAlgo($algo)
		{
			$this->atributo=$algo;
			echo $this->atributo;
		}
	}
$decir = new $dimeAlgo("Hola");
?>