<?php
$salario[1] = 250;
echo "empregado 1 ganha $salario[1]"."<br/>";
$salario[2] = 150;
echo "empregado 2 ganha $salario[2]"."<br/>";
$salario[3] = 450;
echo "empregado 3 ganha $salario[3]"."<br/>";
$salario[4] = 500;
echo "empregado 4 ganha $salario[4]"."<br/>";

$ref = 300;

$cont=1;
while($cont<=   4){
    if ($ref <= $salario[$cont]) {
        $salario[$cont] = $salario[$cont] * 1.5;
        echo "empregado $cont passa a ganhar ".$salario[$cont]."<br/>";
        $cont++;
        
    } else {
       $salario[$cont] = $salario[$cont] *1.3;
       echo  "empregado $cont passa a ganhar ".$salario[$cont]."<br/>";
       $cont++;
}}

?>