<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "a1";

$conn = mysqli_connect($serverName, $username, $password, $dbName);

if(!$conn){
	die("Can't connect to database :".$mysqli_connect_error);
}

$sql = "SELECT * FROM account ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	    echo "id :".$row['id']."-".$row['short_name']."<br/>";
    }
}

mysqli_close($conn);
