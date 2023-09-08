  <html>
    <body>
        <form method="POST" action="">
            <input type="text" name="bil"/>
            <input type="submit" value="submit"/>	
        </form>
    </body>
</html>

<?php
function isprima($number)
{
    // 1 is not prime
    if ( $number == 1 ) {
        return false;
    }
    // 2 is the only even prime number
    if ( $number == 2 ) {
        return true;
    }

    $res = true;
    // square root algorithm speeds up testing of bigger prime numbers
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; $i++ ) {
        if ( $number % $i == 0 ) {
            // break;
            $res = false;
        }
    }
    

    return $res;
    // if( $x == $i-1 ) {
    //     return true;
    // } else {
    //     return false;
    // }
}

//fungsi bantu untuk mengubah true menjadi 'IYA' 
//dan mengubah false menjadi 'BUKAN'  
function cekstatus($status)
{
    if($status==true) {
        return 'IYA';
    } else { 
        return 'BUKAN';
    }
}

if($_POST){
    $input = $_POST["bil"];
    echo "Input : ". $input."<br/>";
    $bil = $input[4].$input[6].$input[8];
    echo "angka ke 4,6,8 : ".$bil."<br/>";
    echo  $bil. " Bilangan prima?  ".cekstatus(isprima($input))."";
}