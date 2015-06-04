<?php

	$agenda[0] ['nombre']= "Diana";
	$agenda[0] ['telefono']= 3209873987;
	$agenda[0] ['email']= "diana@gmail.com";

	$agenda[1] ['nombre']= "Fabiola";
	$agenda[1] ['telefono']= 3237435343;
	$agenda[1] ['email']= "fabi@gmail.com";

	$agenda[2] ['nombre']= "Lore";
	$agenda[2] ['telefono']= 3167348932;
	$agenda[2] ['email']= "lore@gmail.com";	

	$agenda[3] ['nombre']= "Sandra";
	$agenda[3] ['telefono']= 328344353;
	$agenda[3] ['email']= "sandra@gmail.com";

	$agenda[4] ['nombre']= "Jimmy";
	$agenda[4] ['telefono']= 3128439534;
	$agenda[4] ['email']= "jimmy@gmail.com";

	$agenda[5] ['nombre']= "Cristian";
	$agenda[5] ['telefono']= 3229283323;
	$agenda[5] ['email']= "cristian@gmail.com";	


	echo $agenda[2]['nombre'];

	function miAgenda(){

	for ($indice=0; $indice <=5 ; $indice++) { 
	
		echo '
		<table border=1 width=300px>
		     <tr>
		          <td>
		                Nombre:
		          </td>
		          <td>
		                '.$agenda[$indice]['nombre'].'
		          </td>
		     </tr>
		     <tr>
		          <td>
		                Telefono:
		          </td>
		          <td>
		                '.$agenda[$indice]['telefono'].'
		          </td>
		     </tr>
		     <tr>
		          <td>
		                E-mail:
		          </td>
		          <td>
		                '.$agenda[$indice]['email'].'
		          </td>
		     </tr>
		</table>     
		';
		}
	}

	miAgenda();
?>