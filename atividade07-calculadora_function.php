<?php
echo "<h2>Calculadora - Function</h2>";

$op = $_GET["op"];
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];


function Soma(){
    echo "a soma entre ".$_GET["n1"]." e ".$_GET["n2"]." é ".($_GET["n1"]+$_GET["n2"]);}
function Diferença(){
    echo "a diferença entre ".$_GET["n1"]." e ".$_GET["n2"]." é ".($_GET["n1"]-$_GET["n2"]);}
function Multi(){
    echo "o produto entre ".$_GET["n1"]." e ".$_GET["n2"]." é ".($_GET["n1"]*$_GET["n2"]);}
function Divisao(){
    echo "a divisão entre".$_GET["n1"]."e".$_GET["n2"]."é".($_GET["n1"]/$_GET["n2"]);}



switch($op){
    case '+':
        Soma();
        break;
    case '-':
        Diferença();
        break;
    case 'X':
        Multi();
        break;
	case '/':
        Divisao();
        break;
}

?>

<form method="GET">
<input type ="text" name="n1">

<select name="op">
<option name="op" value="+">+</option>
<option name="op" value="-">-</option>
<option name="op" value="X">X</option>
<option name="op" value="/">/</option>
</select>

<input type ="text" name="n2">

<button type="submit">calcular</button>

</form>