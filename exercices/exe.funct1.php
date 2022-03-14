<?php

$tableau = array('50', '80', '20', '100', '10', '0');

function Moyenne ($tableau) {
    $moyenne = array_sum($tableau)/count($tableau);
    echo $moyenne;
}

Moyenne($tableau);