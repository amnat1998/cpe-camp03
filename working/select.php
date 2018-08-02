<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WOW WOW</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "makezazainw";
$password = "";
$dbname = "iot";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM notephone";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ชื่อ: " . $row["Name"]. " - Number: " . $row["Phonenumber"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>