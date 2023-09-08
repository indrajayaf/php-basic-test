<?php

$n = 0;
$n2 = 1;

echo "$n $n2";

for($i=0; $i<10; $i++){
    $output=$n + $n2;
    echo " $output";

    $n = $n2;
    $n2 = $output;
}