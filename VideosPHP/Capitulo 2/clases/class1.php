<?php

class saluda{
	
	function saludo()
	{
		echo "Yo te saludo";
	}

	function adios()
	{
		echo "Yo te digo adios";
	}
}

class subsaluda extends saluda{
	
	var $atributo;

	function holados()
	{
	}
}

$x = new subsaluda();

$c = $x->adios();

?>