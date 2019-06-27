    
 <?php
if (isset($_POST['alt'])&&($_POST['sexo'])){
$altura = $_POST['alt'];
$sexo = $_POST['sexo'];

if($sexo=="m"){
    $ideal=(72.7*$altura)-58;
    echo "o peso ideal para um homem de $altura m é $ideal kilos.";
}else{
    $ideal=(62.1*$altura)-44.7;
    echo "o peso ideal para uma mulher de $altura m é $ideal kilos.";
}}
?>
<form method='POST'>
Altura:<input type='text' name='alt'/><br/>
<input type ='radio' name='sexo' value='m'/>masculino<br/>
<input type='radio' name='sexo' value='f'/>feminino<br/>
<button type='submit'>calcular</button>
</form>