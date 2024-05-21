<?php 

$alunos = array("Miguel","Pedro","Alexandre","Silvio","Luciene","Lucia","Eunice","Luciano","José","Maria");
$notas = array(8,6,9,5,10,9,8,7,8,5);
$media = 0.0;
$soma = 0.0;

for ($x = 0;$x <= 9;$x++){
	echo $alunos[$x].", Nota = ".$notas[$x]."</br>";
	$soma += $notas[$x];
}

$media = $soma / 10;

$MaxNota = max($notas);

//Abaixo, uso o array search para armazenar a posição da nota mais alta na variável $mAluno
$mAluno = array_search(max($notas), $notas);

echo "</br>A média desta classe é $media</br>";

//Aqui, uso a variável $mAluno para exibir o nome correto do array $alunos
echo "</br>O aluno com nota mais alta desta classe foi $alunos[$mAluno]";

 ?>