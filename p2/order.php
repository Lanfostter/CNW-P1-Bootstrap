<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap5 css -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/order.css">
</head>

<body>
    <div class="container-fuild">
        <div class="row clear">
            <div class="col-md-6 clear">
                <div class="logo">
                    <img src="logo/logo.png" alt="">
                </div>
            </div>
            <div class="col-md-6 clear">
                <div class="info">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid mynav">
                            <a class="navbar-brand" href="http://localhost/p2/home.php">Home</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/p2/categories.php">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/p2/food.php">Foods</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="cotainer-fuild">
        <div class="row clear">
            <div class="col clear">
                <div class="main-head">
                    <div class="container">
                        <h3>Fill this form to confirm your order.</h3>
                        <fieldset>
                            <legend>Selected Food</legend>
                            <img src="img/menu-pizza.jpg" class="img-fluid " alt="">
                            <div class="text-order">
                                <h5>Food Title</h5>
                                <p>$2.3<br><span style="font-weight: bold;">Quantity</span></p>
                                <input type="number" id="quantity" name="quantity" min="1" max="">
                            </div>
                        </fieldset>
                    </div>
                    <div class="container">
                        <form action="#">
                            <fieldset id="space-fix">
                                <legend>Delivery Details</legend>
                                <div class="form-content">
                                    <label for="FullName">Full Name</label><br>
                                    <input type="text" id="FullName" placeholder="Enter your full name"><br>
                                    <label for="PhoneNumber">Phone Number</label><br>
                                    <input type="text" id="PhoneNumber" placeholder="Enter your phone number"><br>
                                    <label for="Email">Email</label><br>
                                    <input type="text" id="Email" placeholder="Enter your email"><br>
                                    <label for="Address">Address</label><br>
                                    <textarea name="form-control" id="Address" cols="45" rows="3" placeholder="Enter your address"></textarea><br>
                                    <button type="button" class="btn btn-primary" id="btn-order">Confirm Order</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fuild">
        <div class="row clear">
            <div class="col clear">
                <div class="footer" style="height: 130px">
                    <div class="icons">
                        <a href=""><img src="logo/241349495_849337829057683_2974941694366778451_n.jpg" alt=""></a>
                        <a href=""><img src="logo/241480874_1193542511151338_7986496005378251027_n.jpg" alt=""></a>
                        <a href=""><img src="logo/241410108_4557576517668422_7471832700354727107_n.jpg" alt=""></a>
                    </div>
                    <div>
                        <p>All rights reserved. Designed By <span style="color: #f56b92;">CSE.TLU</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>


</html>