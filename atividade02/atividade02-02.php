<form method='GET'>
data de nascimento:<input type='date' name='nasc'>
<button type='submit'>verificar idade</button>
</form>

<?php
$nasc=explode('-',@$_GET['nasc']);
$hoje=explode('-',date('Y-m-d'));
$idade = "hoje você tem: "
        .($hoje['0']-$nasc['0'])." anos, "
        .($hoje['1']-$nasc['1'])." meses, "
        .($hoje['2']-$nasc['2'])." dias.";

echo $idade;
?>