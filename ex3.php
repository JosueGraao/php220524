<?php

//Este é uma tabuada do 2

$digitos = array (1,2,3,4,5,6,7,8,9,10);
$mult = 3;

echo "O usuário solicitou uma tabuada do $mult. Segue abaixo:</br>";

for ($x = 0;$x <= 9;$x++){
	$tab = $digitos[$x] * $mult;
	echo "$tab</br>";
}

 ?>