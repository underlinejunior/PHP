<?php
$semana=['Domingo','Segunda-Feira','Terça-Feira','Quarta-feira','Quinta-feira','Sexta-feira','Sábado'];
$prato=['Lasanha quatro queijos','Frango ao molho madeira','Arroz a grega','Feijoada à moda da casa','Nhoque paulista','Bacalhau ao forno','Feijão Branco'];
$preco=['R$ 12,60','R$ 10,00','R$ 09,40','R$ 11,20','R$ 08,50','R$ 15,20','R$ 10,00'];
$a=date('w');
?>

<table border='1' width='60%'>

<tr bgcolor='SlateBlue'>
<td>Elemento</td>
<td>Dia da Semana</td>
<td>Prato do dia</td>
<td>Preço</td>
</tr>

<tr bgcolor='<?php echo $a=='0'? 'DeepSkyBlue':'White';?>'>
<td><?php echo 0;?></td>
<td><?php echo $semana[0];?></td>
<td><?php echo $prato[0];?></td>
<td><?php  echo $preco[0];?></td>
</tr>

<tr bgcolor='<?php echo $a=='1'? 'DeepSkyBlue':'White';?>'>
<td><?php echo 1;?></td>
<td><?php echo $semana[1];?></td>
<td><?php echo $prato[1];?></td>
<td><?php echo $preco[1];?></td>
</tr>

<tr bgcolor='<?php echo $a=='2'? 'DeepSkyBlue':'White';?>'>
<td><?php echo 2;?></td>
<td><?php echo $semana[2];?></td>
<td><?php echo $prato[2];?></td>
<td><?php echo $preco[2];?></td>
</tr>

<tr bgcolor='<?php echo $a=='3'? 'DeepSkyBlue':'White';?>'>
<td><?php echo 3;?></td>
<td><?php echo $semana[3];?></td>
<td><?php echo $prato[3];?></td>
<td><?php echo $preco[3];?></td>
</tr>

<tr bgcolor='<?php echo $a=='4'? 'DeepSkyBlue':'White';?>'>
<td><?php echo 4;?></td>
<td><?php echo $semana[4];?></td>
<td><?php echo $prato[4];?></td>
<td><?php echo $preco[4];?></td>
</tr>

<tr bgcolor='<?php echo $a=='5'? 'DeepSkyBlue':'White';?>'>
<td><?php echo 5;?></td>
<td><?php echo $semana[5];?></td>
<td><?php echo $prato[5];?></td>
<td><?php echo $preco[5];?></td>
</tr>

<tr bgcolor='<?php echo $a=='6'? 'DeepSkyBlue':'White';?>'>
<td><?php echo 6;?></td>
<td><?php echo $semana[6];?></td>
<td><?php echo $prato[6];?></td>
<td><?php echo $preco[6];?></td>
</tr>

</table>
<?php
echo "<br/> Hoje é <b>$semana[$a]</b><br/>";
echo "<br/> Nossa sugestão para hoje é: <b>$prato[$a]</b><br/>";
echo "<br/> Preço: <b>$preco[$a]</b><br/>";
?>