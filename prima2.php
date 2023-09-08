<form method="POST" action="">
    <input type="text" name="number">
    <input type="submit" value="submit">
</form>

<?php

function isprima($number)
{
    if($number == 1){
        return false;
    }

    if($number == 2){
        return true;
    }

    $x = sqrt($number);
    $x = floor($x);

    $ret = true;
    for($i=2; $i<=$x; ++$i){
        if($number % $i == 0){
            $ret = false;
        }
    }

    return $ret;
}

function cekstatus($status){
    if($status == true){
        return "IYA";
    }else{
        return "BUKAN";
    }
}

if($_POST){
    $number = $_POST['number'];
    $angka = intval($number[2].$number[4].$number[6]);
    echo "Bilangan ".$angka." adalah bilangan prima? ".cekstatus(isprima($angka));
}
