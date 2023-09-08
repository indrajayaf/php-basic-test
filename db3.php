<?php
$server = "localhost";
$uname = "root";
$pwd = "";
$db = "a1";

$conn = mysqli_connect($server, $uname, $pwd, $db);

if(!$conn){
    die("Can't connect db".$mysqli_connect_error);
}

$sql = "SELECT * FROM account LIMIT 10";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        echo "Id :".$row['id']."<br/>";
    }
}

mysqli_close($conn);
?>