<?php
$soma1 = 20;
function exemplo($soma2){
    global $soma1;
    $operacao = $soma1 + $soma2;
    return $operacao;
}

echo exemplo(15);