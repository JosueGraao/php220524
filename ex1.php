<?php 

$alunos = array("Miguel","Pedro","Alexandre","Silvio","José","Lucia","Eunice","Luciano","Luciene","Maria");
$notas = array(8,6,9,5,8,9,8,7,10,5);
//A soma das notas dá 75. Logo, a média deve ser 7.5.
$media = 0.0;
$soma = 0.0;
$x = 0;

foreach ($alunos as $seq){
	$soma += $notas[$x];
	$x++;
}

$media = $soma / 10;

$MaxNota = max($notas);

//Abaixo, uso o array search para armazenar a posição da nota mais alta na variável $mAluno
$mAluno = array_search(max($notas), $notas);

echo "A média desta classe é $media</br>";

//Aqui, uso a variável $mAluno para exibir o nome correto do array $alunos
echo "</br>O aluno com nota mais alta desta classe foi $alunos[$mAluno] com nota $MaxNota.";

 ?>