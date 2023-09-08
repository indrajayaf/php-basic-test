<?php
$str = strval(5695479);
$nums = str_split($str);
rsort($nums);
echo implode("",$nums);