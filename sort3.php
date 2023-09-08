<?php

$str = 8734850;

$strval = strval($str);
$split = str_split($strval);

rsort($split);
echo implode("",$split);