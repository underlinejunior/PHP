<table align='center'>
<form method=POST>
<tr><td align='right'>Nome:</td><td><input type='text' name='nome' placeholder='digite seu nome'></td></tr>
<tr><td align='right'>Telefone:</td><td><input type='text' name='tel' placeholder='digite seu Telefone'></td></tr>
<tr><td align='right'>Email:</td><td><input type='text' name='email' placeholder='digite seu email'></td></tr>
<tr><td colspan='2' align='center'><button name='salvar' type='submit'>Salvar</button>
<button name='apagar' type='submit'>apagar</button></td></tr>
</form></table>

<hr>
<table border='1' align='center'>
<tr><td>Nome</td>
<td>Telefone</td>
<td>Email</td></tr>


<?php

@$gravando=fopen("agenda.txt","a");
@$imprimindo=fopen("agenda.txt","r");
$nome=@$_POST['nome'];
$tel=@$_POST['tel'];
$email=@$_POST['email'];

if(@$_POST['salver']!= 'clicked' && @$_POST['nome'] !=null && @$_POST['tel'] !=null && @$_POST['email'] !=null){
fwrite($gravando,$nome."|".$tel."|".$email."|\n");
}
@$imp = explode("|",fread($imprimindo,'9024'));

$cont=0;
echo '<tr>';
array_pop($imp);

for ($i=0; $i < sizeof($imp); $i++) { 
    echo "<td>".$imp[$i]."</td>"; 
    $cont++; 
if($cont%3==0){
    echo "</tr>";}
}

echo "</table>";

?>