<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Shopping cart</title>
    
</head>
<body>
<?php
include("config.php");
include("nav.php");

$sql = "SELECT order_id, firstname, lastname, email, cust_address, contact, shoe_id, shoe_size, shoe_color FROM tblOrders";
$result = mysqli_query($conn, $sql);

?>

    <header class="bg-dark py-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <h3 style="color:white;text-align:center;">orders</h3>
    </header>

    <table class="table">
            <thead>
                <tr>
                    <th class ="table-dark" scope="col">Order id</th>
                    <th class ="table-dark" scope="col">First name</th>
                    <th class ="table-dark" scope="col">Last name</th>
                    <th class ="table-dark" scope="col">Email</th>
                    <th class ="table-dark" scope="col">Address</th>
                    <th class ="table-dark" scope="col">Contanct</th>
                    <th class ="table-dark" scope="col">Product id</th>
                    <th class ="table-dark" scope="col">Size</th>
                    <th class ="table-dark" scope="col">Color</th>
                    <th class ="table-dark" scope="col">EDIT</th>
                    <th class ="table-dark" scope="col">DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row["order_id"] ?></th>
                    <td><?php echo $row["firstname"] ?></td>
                    <td><?php echo $row["lastname"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["cust_address"] ?></td>
                    <td><?php echo $row["contact"] ?></td>
                    <td><?php echo $row["shoe_id"] ?></td>
                    <td><?php echo $row["shoe_size"] ?></td>
                    <td><?php echo $row["shoe_color"] ?></td>
                    <td><button type="button" class="btn btn-primary"><a class="nav-link text-white" href="edit.php?id=<?php echo $row["order_id"] ?>">EDIT</a></button></td>
                    <td><button type="button" class="btn btn-danger"><a class="nav-link active text-white" href="delete.php?id=<?php echo $row["order_id"] ?>">DELETE</a></button></td>
                </tr>
                <?php }
                } else {
                echo "0 results";
                }
                mysqli_close($conn);
                ?>
            </tbody>
    </table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
