<?php 

//São 5 negativos, 5 positivos, 4 pares e 6 ímpares

$digitos = array (-5,-4,-3,-2,-1,1,2,3,4,5);
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

for ($x = 0;$x <= 9;$x++){
	$num = $digitos[$x];
	
	if($num < 0){
		$negativos++;
	}else{
		$positivos++;
	}
	
	if($num % 2 == 0){
		$pares++;
	}else{
		$impares++;
	}
}

echo "O array tem $negativos números negativos</br>";
echo "O array tem $positivos números positivos</br>";
echo "O array tem $pares números pares</br>";
echo "O array tem $impares números ímpares</br>";

?>