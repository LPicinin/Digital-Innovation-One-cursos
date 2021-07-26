<?php

function divisao(float $n1, float $n2)
{
    if ($n2 == 0)
    {
        throw new Exception("Segundo elemento não pode ser 0");
        die();
    }
    echo 'ok <br>';
    return $n1 / $n2;
}

try {
    echo divisao(20, 0);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
