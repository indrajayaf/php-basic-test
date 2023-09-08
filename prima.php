<form method="POST" action="">
    <input type="text" name="number" minlength="9" maxlength="9"/>
    <input type="submit" value="submit"/>
</form>

<?php
function isprima($number){
    if($number == 1){
        return false;
    }

    if($number == 2){
        return true;
    }
   
    $res = true;
    $x = sqrt($number);
    $x = floor($x);
    
    for($i=2; $i<=$x; $i++){
        if($number % $i == 0){
            $res = false;
        }
    }
    return $res;
}

function cek($status){
    if($status == true){
        return "<b>TERMASUK</b>";
    } else {
        return "<b>BUKAN</b>";
    }
}


// function isprima($number)
// {
//     // 1 is not prime
//     if ( $number == 1 ) {
//         return false;
//     }
//     // 2 is the only even prime number
//     if ( $number == 2 ) {
//         return true;
//     }

//     $res = true;
//     // square root algorithm speeds up testing of bigger prime numbers
//     $x = sqrt($number);
//     $x = floor($x);
//     for ( $i = 2 ; $i <= $x ; $i++ ) {
//         if ( $number % $i == 0 ) {
//             // break;
//             $res = false;
//         }
//     }
    

//     return $res;
//     // if( $x == $i-1 ) {
//     //     return true;
//     // } else {
//     //     return false;
//     // }
// }

// //fungsi bantu untuk mengubah true menjadi 'IYA' 
// //dan mengubah false menjadi 'BUKAN'  
// function cekstatus($status)
// {
//     if($status==true) {
//         return 'IYA';
//     } else { 
//         return 'BUKAN';
//     }
// }

// if($_POST){
//     $angka = $_POST['angka'];
//     echo $angka." adalah bilangan prima? ".cek(is_prima($angka));
// }

if($_POST){
    $num = $_POST['number'];
    $number = intval($num[0].$num[3].$num[8].$num[5]);
    echo $number." ".cek(isprima($number))." kelipatan bilangan prima";
}
?>