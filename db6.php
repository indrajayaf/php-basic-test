<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "a1";

$conn = new mysqli($serverName, $username, $password, $dbName);

if($conn->connect_error){
    die("Can't connect to database :".$conn->connect_error);
}

$sql = "SELECT * FROM account LIMIT 10";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Id :".$row['id']."<br/>";
    }
}


$conn->close();

