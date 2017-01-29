<?php 
class A
{
	function build($cadena)
	{
		$cadena_nueva = "";
		for ($i=0; $i < strlen($cadena); $i++) {
				$valor = $cadena[$i];
				if($i +1 == strlen($cadena)){
					$valor_siguiente = " ";
				}else{
					$valor_siguiente = $cadena[$i+1];
				}
			if($valor == "(" && $valor_siguiente == ")"){
				$cadena_nueva = $cadena_nueva."()";
			}
		}
		return $cadena_nueva ;
	}
}
$c = new A();
$cade = "((()())))))))";
 echo $c->build($cade);
?>