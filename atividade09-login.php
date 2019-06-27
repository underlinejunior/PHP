
<?php
session_start();
$_SESSION['user'] = @$_POST['nome'];
$_SESSION['pass'] = @$_POST['senha'];

if ($_SESSION['user'] !== null && @$_SESSION['pass']!== null){
    if(
    $_SESSION['user']=='admin' && $_SESSION['pass']=='123'||
    $_SESSION['user']=='vitor' && $_SESSION['pass']=='124'||
    $_SESSION['user']=='rai' && $_SESSION['pass']=='senha')
    {
header('Location:login2.php');
}else{
    echo "<font color='red'>Erro no login</font>";
}}
?>
<html>
<body>
<style>
body{background-color:gray;font-family:verdana;}
.titulo{margin:0px auto;width:50%; background-color:rgb(5, 157, 195); color:white; padding:10px;}
.login{margin:0px auto;width:50%; background-color:white; color:black; padding:10px;}
</style>

<div class="titulo">
<h2>LOGIN</h2>
</div>
<div  class="login">
<form method='POST'>
Usuario:<br/> <input type='text' name='nome'><br/>
Senha:<br/> <input type='password' name='senha'><br/><br/>
<button type='submit' name='acesso'value='acessar'>entrar</button>
<button type='reset' name='limpo' value='limpar'>limpar</button>
</form>
</div>
</body>
</html>