<html>
    
 <?php

 $altura = 1.75;
$sexo = "f";

if($sexo=="m"){
    $ideal=(72.7*$altura)-58;
    echo "o peso ideal para um homem de $altura m é $ideal kilos.";
}
else{
    $ideal=(62.1*$altura)-44.7;
    echo "o peso ideal para uma mulher de $altura m é $ideal kilos.";
}
?>
</html>