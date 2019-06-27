<?php
$p1=array(1,2);
$p2=array(4,5);
$parte1= pow(($p2[0]-$p1[0]),2);

$parte2= pow(($p2[1]-$p1[1]),2);

$soma=$parte1+$parte2;

$d=sqrt($soma);
echo "a distancia entre os pontos é: ".$d;

echo $d;
?>