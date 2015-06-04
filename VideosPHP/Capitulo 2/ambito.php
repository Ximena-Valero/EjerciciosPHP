<?php

	$variable = "hola";

	function hola(){

		global $variable;
		echo $variable;
	}

	hola();

?>