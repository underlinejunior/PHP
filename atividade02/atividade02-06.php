<form method='GET'>
nota 1 <input type='text' name='n1'><br/>
nota 2 <input type='text' name='n2'><br/>
nota 3 <input type='text' name='n3'><br/>
<button type='submit'>verificar média</button>
</form>

<?php
$n1=@$_GET['n1'];
$n2=@$_GET['n2'];
$n3=@$_GET['n3'];
$media=($n1 + $n2*2 + $n3*3 + (($n1+$n2+$n3)/3))/7;
if ($media<4){
    echo "média $media tem conceito <b>E</b>";
}else if($media<6){
    echo "média $media tem conceito <b>D</b>";
}else if($media<7.5){
    echo "média $media tem conceito <b>C</b>";
}else if($media<9){
    echo "média $media tem conceito <b>B</b>";
}else{
    echo "média $media tem conceito <b>A</b>";
}
?>