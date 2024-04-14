<?php
include("config.php");
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$address=$_POST['cust_address'];
$contact=$_POST['contact'];
$shoe_id=$_POST['shoe_id'];
$shoe_size=$_POST['shoe_size'];
$shoe_color=$_POST['shoe_color'];

//insert item
$sql = "INSERT INTO tblOrders (firstname, lastname, email, cust_address, contact, shoe_id, shoe_size, shoe_color)
VALUES ('$fname', '$lname', '$email', '$address', '$contact', '$shoe_id', '$shoe_size', '$shoe_color')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: '.'shoppingcart.php');
?>