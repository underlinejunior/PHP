<form method='GET'>
cargo:<input type='text' name='cargo'>
salario:<input type='text' name='salario'>
<button type='submit'>novo salário</button>
</form>

<?php
$salario=@$_GET['salario'];
$cargo=@$_GET['cargo'];
if($cargo=='Gerente'||$cargo=='gerente'){
    echo "salário reajustado é de R$".$salario*1.1.",00";
}
else if($cargo=='Engenheiro'||$cargo=='engenheiro'){
    echo"salário reajustado é de R$".$salario*1.2.",00";
}else if($cargo=="tecnico"||$cargo=="Tecnico"){
    echo "salário reajustado é de R$".$salario*1.3.",00";
}else{
    echo "salário reajustado é de R$".$salario*1.4.",00";
}
?>