<?php

$n = $_POST['numero'];

if($n > 0){
    echo "O número ".$n." é positivo";
}else if($n == 0) {
    echo "O número ".$n." é igual a zero";
}else {
    echo "O número ".$n." é negativo"; 
}

?>