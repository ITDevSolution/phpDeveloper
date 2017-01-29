<?php 
/**
*  a por d
*  c por d
*/
class CompleteRange
{
	function build($array)
	{
		$array_nuevo = array();

		$primer_valor = $array[0];
		$ultimo_valor = $array[count($array)-1];


		for ($i=$primer_valor; $i <= $ultimo_valor ; $i++) {
				$array_nuevo[] = $i;
		}
		return $array_nuevo ;
	}
}
$c = new CompleteRange();
$array = array(1 ,3 ,5 ,8,40);
 echo json_encode($c->build($array));
?>