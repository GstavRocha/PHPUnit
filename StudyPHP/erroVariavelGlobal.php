<?php
$soma1 = 2;

function testeErro($soma2)
{
    $operado = $soma1 + $soma2;
    return $operado;
}

echo testeErro(10);