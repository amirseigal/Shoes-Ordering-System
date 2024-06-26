<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Delete order</title>
    
</head>
<body>
    <!-- Navigation-->
    <?php
    include("config.php");
    include("nav.php"); 

    $id = $_GET['id'];
    ?>
    <!-- Header-->
    <header class="bg-dark py-5">
        <form class="container px-4 px-lg-5 my-5">
            <center>
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Delete in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">Confirm your cancellation</p>
            </div>
            <br>
            <button type="submit" class="btn btn-danger w-25"><a class="nav-link active text-white" aria-current="page" href="deletefunc.php?id=<?php echo $id ?>">Confirm</a></button>
            <button type="submit" class="btn btn-secondary w-25"><a class="nav-link active text-white" aria-current="page" href="shoppingcart.php">Abort</a></button>
        </form>
    </header>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>