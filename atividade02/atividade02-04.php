
<form method='GET'>
idade:<input type='text' name ='idade'>
<button type='submit'>categoria</button>
</form>

<?php
$idade=@$_GET['idade'];

if ($idade<5){
    echo "nadador ainda não tem idade para competir!";
}else if($idade<8){
    echo "nadador categoria INFATIL A";
}else if($idade<11){
    echo "nadador categoria INFATIL B";
}else if($idade<13){
    echo "nadador categoria JUVENIL A";
}else if($idade<18){
    echo "nadador categoria JUVENIL B";
}else($idade>=18){
    print "nadador categoria ADULTO"
}

?>
