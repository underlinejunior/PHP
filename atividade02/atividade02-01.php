<form method="GET">
valor1:<input type="text" name="v1"><br/>
valor2:<input type="text" name="v2"><br/>
valor3:<input type="text" name="v3"><br/>
<button type='submit'>ordenar</button>
</form>

<?php
$n1=@$_GET['v1'];
$n2=@$_GET['v2'];
$n3=@$_GET['v3'];

$a=array($n1,$n2,$n3);
sort($a);
echo "<font color='gray'>".$a['0']." ".$a['1']."</font> <font color='red'> ".$a['2']."</font>";
?>