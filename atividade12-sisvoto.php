<h2><center>Sysvoto</center></h2>
<hr>
<form method='POST'>
<center>Partido A <button name='p1' value='pa'>votar</button></center><br/>
<center>Partido B <button name='p2'value='pb'>votar</button></center>
</form>
<hr>

<?php
session_start();

function Votar1(){
    @$_SESSION['p1']++;
}
function Votar2(){
    @$_SESSION['p2']++;
}
function Apagar(){
    session_destroy();
}

if(@$_POST['p1']=='pa'){
    Votar1();
}
if(@$_POST['p2']=='pb'){
    Votar2();
}
if(@$_POST['del']=='del'){
    Apagar();
}

echo '<center>Resultado:<br/>';
echo '<center>Partido A: <b>'.@$_SESSION['p1'].'</b> votos<br/>';
echo '<center>Partido B: <b>'.@$_SESSION['p2'].'</b> votos<br/>';
?>
<form method='POST'>
<center><button name='del' value='del'>Apagar</button>
</form>