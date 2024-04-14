<?php
include("config.php");
$id = $_GET['id'];
$Efname=$_POST['Efirstname'];
$Elname=$_POST['Elastname'];
$Eemail=$_POST['Eemail'];
$Eaddress=$_POST['Ecust_address'];
$Econtact=$_POST['Econtact'];
$Eshoe_id=$_POST['Eshoe_id'];
$Eshoe_size=$_POST['Eshoe_size'];
$Eshoe_color=$_POST['Eshoe_color'];

if (isset($Efname) && $Efname!=''){
    $sql = "UPDATE tblOrders SET firstname='$Efname' WHERE order_id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: '.'shoppingcart.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
}

}
if (isset($Elname) && $Elname!=''){
    $sql = "UPDATE tblOrders SET lastname='$Elname' WHERE order_id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: '.'shoppingcart.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
}

}
if (isset($Eemail) && $Eemail!=''){
    $sql = "UPDATE tblOrders SET email='$Eemail' WHERE order_id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: '.'shoppingcart.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
}

}
if (isset($Eaddress) && $Eaddress!=''){
    $sql = "UPDATE tblOrders SET cust_address='$Eaddress' WHERE order_id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: '.'shoppingcart.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
}

}
if (isset($Econtact) && $Econtact!=''){
    $sql = "UPDATE tblOrders SET contact='$Econtact' WHERE order_id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: '.'shoppingcart.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
}

}
if (isset($Eshoe_id) && $Eshoe_id!=''){
    $sql = "UPDATE tblOrders SET shoe_id='$Eshoe_id' WHERE order_id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: '.'shoppingcart.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
}

}
if (isset($Eshoe_size) && $Eshoe_size!=''){
    $sql = "UPDATE tblOrders SET shoe_size='$Eshoe_size' WHERE order_id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: '.'shoppingcart.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
}

}
if (isset($Eshoe_color) && $Eshoe_color!=''){
    $sql = "UPDATE tblOrders SET shoe_color='$Eshoe_color' WHERE order_id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: '.'shoppingcart.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>