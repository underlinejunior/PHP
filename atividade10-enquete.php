<?php
session_start();
?>
<h2>Sistema de Enquete</h2>

<fieldset style='margin:0% 20%'>
<legend>Qual sua linguagem favorita?</legend>
<form method='POST'>

<input type='radio' name='op' value='python'>Python<br/>
<input type='radio' name='op' value='java'>Java<br/>
<input type='radio' name='op' value='php'>PHP<br/>
<input type='radio' name='op' value='c'>C++<br/>
<button type='submit' name='btn' value='clicked'>Votar<br/>
</form>
</fieldset>
<h2>Resultado:</h2>

<?php
@$_SESSION['voto']=@$_POST['op'];
@$_SESSION['python'];
@$_SESSION['java'];
@$_SESSION['php'];
@$_SESSION['c'];

if(@$_POST['btn1']='clicked' && @$_POST['op']!=null){
    switch(@$_POST['op']){
        case "python":
        @$_SESSION['python']++;
        break;
        case "java":
        @$_SESSION['java']++;
        break;
        case "php":
        @$_SESSION['php']++;
        break;
        case "c":
        @$_SESSION['c']++;
        break;
    }
    @$_SESSION['contador']++;
    
}
@$_SESSION['p']=(@$_SESSION['python']/@$_SESSION['contador'])*100;
@$_SESSION['j']=(@$_SESSION['java']/@$_SESSION['contador'])*100;
@$_SESSION['ph']=(@$_SESSION['php']/@$_SESSION['contador'])*100;
@$_SESSION['cm']=(@$_SESSION['c']/@$_SESSION['contador'])*100;
echo "total de votos: ".@$_SESSION['contador']."<br/>";

?>
Python <?php echo @$_SESSION['p'];?>%
<hr color='blue' width="<?php echo @$_SESSION['p'];?>%" size="10">
Java <?php echo @$_SESSION['j'];?>%
<hr color='red' width="<?php echo @$_SESSION['j'];?>%" size="10">
PHP <?php echo @$_SESSION['ph'];?>%
<hr color='green' width="<?php echo @$_SESSION['ph'];?>%" size="10">
C++ <?php echo @$_SESSION['cm'];?>%
<hr color='gray' width="<?php echo @$_SESSION['cm'];?>%" size="10">

