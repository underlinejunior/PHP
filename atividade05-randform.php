<?php
echo "<h2>Sorteador</h2>";
$sort=array();

for ($i=0; $i <6 ; $i++) { 
    $sort[$i] = rand(1,20);
    }
sort($sort);
$resultado = implode(' - ',$sort);
?>

<form method='POST'>
digite um numero entre 1 e 20 
<input type='text' name='num'/><br/>
<button type='submit'>Verificar</button>

<fieldset>
<legend>RESULTADO:</legend>

<?php
if(($_POST['num'])==null){
    echo "<b>informe um valor a ser avaliado</b><br/><br/>";
}else{
    if(in_array($_POST['num'],$sort)){
        echo "<font color='blue'>VOCÊ ACERTOU!</font><br/><br/> numero digitado: ".$_POST['num']."<br/>";
    }
    else{
        echo "<font color='red'>VOCÊ ERROU!</font> <br/><br/>numero digitado: ".$_POST['num']."<br/>";
    }
}
echo "numeros sorteados: ".$resultado;
?>
</fieldset>
</form>

