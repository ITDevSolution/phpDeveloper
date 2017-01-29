<?php 
	
	class ChangeString{

		function build($cad){
		$resul = str_split($cad);
		for ($i=0; $i < count($resul); $i++) { 
			switch ($resul[$i]) {
				case 'a': echo 'b'; break;
				case 'b': echo 'c'; break;
				case 'c': echo 'd'; break;
				case 'd': echo 'e'; break;
				case 'e': echo 'f'; break;
				case 'f': echo 'g'; break;
				case 'g': echo 'h'; break;
				case 'h': echo 'i'; break;
				case 'i': echo 'j'; break;
				case 'j': echo 'k'; break;
				case 'k': echo 'l'; break;
				case 'l': echo 'm'; break;
				case 'm': echo 'n'; break;
				case 'n': echo 'o'; break;
				case 'o': echo 'p'; break;
				case 'p': echo 'q'; break;
				case 'q': echo 'r'; break;
				case 'r': echo 's'; break;				
				default:
					default: echo $resul[$i]; break;
			}
		}
		return $resul;
		}
	}

	$objprueba = new ChangeString();
	$objprueba->build("***abc*");


 ?>