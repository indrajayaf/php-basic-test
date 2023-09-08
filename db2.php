<?php
$host = "localhost";
$uname = "root";
$pwd = "";
$db = "a1";

$conn = new mysqli($host, $uname, $pwd, $db);

if($conn->connect_error){
    die("Can't connect db :".$conn->connect_error);
} 

$sql = "SELECT * FROM account ORDER BY id DESC";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Id : ".$row['id']."<br/>";
    }
}

$conn->close();

?>