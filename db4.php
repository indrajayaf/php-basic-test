<?php
$server = "localhost";
$uname = "root";
$pwd = "";
$db = "a1";

$cn = new mysqli($server, $uname, $pwd, $db);

if($cn->connect_error){
    die("Cant connect db :".$cn->connect_error);
}

$q = "SELECT * FROM account";
$res = $cn->query($q);

if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        echo "id : ".$row['id']."<br/>";
    }
}

$cn->close();