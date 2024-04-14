<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoes_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/*
$sql = "CREATE DATABASE shoes_db";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
*/

/*
$sql = "CREATE TABLE tblOrders (
    order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    cust_address VARCHAR(30) NOT NULL,
    contact VARCHAR(30) NOT NULL,
    shoe_id INT(6) NOT NULL,
    shoe_size INT(2) NOT NULL,
    shoe_color VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
      echo "Table created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
*/

?>