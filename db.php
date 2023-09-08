<?php
$servername = "localhost";
$username = "SA";
$password = "abcd";
$dbname = "Film";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

$sql = "SELECT * FROM movie ORDER BY price LIMIT 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Code: " . $row["code"]. " - Name: " . $row["name"]. " - Stock DVD: " . $row["stock_dvd"]. "- Price: ".$row['price']."<br/>";
    }
} else {
    echo "0 results";
}

