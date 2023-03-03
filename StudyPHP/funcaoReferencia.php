<?php
function referencia(&$soma1){
    $soma1 += 3;
    return $soma1;
}
$soma2 = 3;
referencia($soma2);
echo $soma2;