<?PHP

if (isset($_GET['num1'])&&($_GET['num2'])&&($_GET['op'])){
$valor1 = $_GET['num1'];
$valor2 = $_GET['num2'];
$op = $_GET['op'];

switch($op){
    case '+':
        $resultado=$valor1+$valor2;
        break;
    case '-':
        $resultado=$valor1-$valor2;
        break;
    case 'X':
        $resultado=$valor1*$valor2;
        break;
	case '/':
        $resultado=$valor1/$valor2;
        break;
}
echo $resultado;
}

?>

<form method="GET">
valor 1<input type="text" name="num1"><br/><br/>
valor 2<input type="text" name="num2"><br/>

<input type="radio" name="op" value="+">soma</option><br/>
<input type="radio" name="op" value="-">diferença</option><br/>
<input type="radio" name="op"  value="X">produto</option><br/>
<input type="radio" name="op"  value="/">divisão</option><br/>
    </select>
<button type="submit">CALCULAR</button>
</form>
