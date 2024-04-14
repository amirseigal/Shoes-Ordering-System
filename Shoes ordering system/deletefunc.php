<?php
include("config.php");
include("nav.php"); 

$id = $_GET['id'];

$sql = "DELETE FROM tblOrders WHERE order_id=$id";

if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: '.'shoppingcart.php');
?>