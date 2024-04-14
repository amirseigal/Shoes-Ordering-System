<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Order</title>
    <script src="js/scripts.js"></script>
</head>
<body>
    <!-- Navigation-->
    <?php include("nav.php")?>
    <!-- Header-->
    <header class="bg-dark py-5">
        <form class="container px-4 px-lg-5 my-5" action="insert.php" method="POST" #loginForm="ngForm" (ngSubmit)="submit(loginForm.value)">
            <center>
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">Finallize Your Order</p>
            </div>
            <br>
            <div class="input-group w-50">
                <span class="input-group-text w-25">First name*</span>
                <input type="text" aria-label="First name" class="form-control" name="firstname" ngModel required>
            </div>
            <div class="input-group w-50">
                <span class="input-group-text w-25">Last name*</span>
                <input type="text" aria-label="Last name" class="form-control"name="lastname" ngModel required>
            </div>
            <div class="input-group w-50">
                <span class="input-group-text w-25">Email</span>
                <input type="email" aria-label="Email" class="form-control" name="email">
            </div>
            <div class="input-group w-50">
                <span class="input-group-text w-25">Address*</span>
                <input type="text" aria-label="First name" class="form-control" name="cust_address" ngModel required>
            </div>
            <div class="input-group w-50">
                <span class="input-group-text w-25">Contact*</span>
                <input type="text" aria-label="Contact" class="form-control" name="contact" ngModel required>
            </div><br>
            <div class="input-group mb-3 w-50">
                <label class="input-group-text w-25" for="inputGroupSelect01">Shoe model*</label>
                <select class="form-select" id="inputGroupSelect01" required name="shoe_id">
                    <option selected></option>
                    <option value="1">Jordan Air</option>
                    <option value="2">RS-Simul8 Puma</option>
                    <option value="3">Vans</option>
                    <option value="4">Tabriz shoes</option>
                    <option value="5">Melli shoes</option>
                    <option value="6">GUCCI</option>
                    <option value="7">Balenciaga</option>
                    <option value="8">New Balance 574 rugged</option>
                </select>
            </div>
            <div class="input-group mb-3 w-50">
                <label class="input-group-text w-25" for="inputGroupSelect01">Shoe size*</label>
                <select class="form-select" id="inputGroupSelect01" required name="shoe_size">
                    <option selected></option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                </select>
            </div>
            <div class="input-group mb-3 w-50">
                <label class="input-group-text w-25" for="inputGroupSelect01">Shoe color*</label>
                <select class="form-select" id="inputGroupSelect01" required name="shoe_color">
                    <option selected></option>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Brown">Brown</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success" [disabled]="loginForm.invalid">Submit</button>
        </form>
    </header>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
?>