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
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <header>
        <!-- start container header -->
        <div class="container-fluid clear">
            <div class="row">
                <div class="col-md-6 clear">
                    <img src="logo/logo.png" alt="" class="logo-header">
                </div>
                <div class="col-md-6 clear">
                    <!-- start navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light nav-header clear">
                        <div class="container-fluid clear">
                            <a class="nav-link text-danger" href="http://localhost/p2/home.php">Home</a>
                            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link text-danger" aria-current="page" href="http://localhost/p2/categories.php">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-danger" href="http://localhost/p2/food.php">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-danger" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- end navbar -->
                </div>
            </div>

            <div class="img-header clear d-flex justify-content-center d-flex align-items-center">
                <!-- start search bar -->
                <div class="input-group mb-3 search-bar clear ">
                    <input type="text" class="form-control" placeholder="Search for Food" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
                <!-- end search bar -->
            </div>
        </div>
    </header>
    <main>
        <!-- start container main header-->
        <div class="container-fluid clear">
            <div class="d-flex align-items-center d-flex justify-content-center main-content">
                <h1 class="clear">Explore Food</h1>
            </div>
            <div class="myimg">
                <!-- start row -->
                <div class="row myrow">
                    <div class="col-md-4 d-flex justify-content-end clear img1">
                        <img src="img/pizza.jpg" class="img" alt="">
                    </div>
                    <div class="col-md d-flex justify-content-center clear img1">
                        <img src="img/burger.jpg" class="img" alt="">
                    </div>
                    <div class="col-md d-flex justify-content-start clear img1">
                        <img src="img/momo.jpg" class="img" alt="">
                    </div>
                </div>
                <!-- end row-->
            </div>
        </div>
        <!-- end container main header -->
        <!-- start container main body-->
        <div class="container-fluid clear">
            <div class="img-main">
                <div class="d-flex align-items-center d-flex justify-content-center main-content">
                    <h3 class="clear">Food Menu</h3>
                </div>
                <!-- start row -->
                <div class="row myrow1 clear">
                    <div class="col-md-6 clear d-flex justify-content-end d-flex align-items-start">
                        <div class="p-3 border bg-light mybg" style="margin-right: 20px;">
                            <!-- start row -->
                            <div class="row" style="height: 100%;">
                                <div class="order col-md-4" style="height: 100%;">
                                    <img src="img/pizza.jpg" class="img-fluid img-pizza" alt="">
                                </div>
                                <div class="col-md">
                                    <p class="fw-bold fs-5 clear">Food Title</p>
                                    <p class="fw-bolder fs-5 clear">$2.3</p>
                                    <p class="fw-normal">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                    <form action="http://localhost/p2/order.php">
                                        <input type="submit" class="btn-check" id="btncheck1" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-order d-flex align-items-center" for="btncheck1">Order Now</label>
                                    </form>
                                </div>
                            </div>
                            <!-- end row-->
                        </div>
                    </div>
                    <div class="col-md-6 clear d-flex justify-content-start d-flex align-items-start">
                        <div class="p-3 border bg-light mybg" style="margin-left: 20px;">
                            <!-- start row -->
                            <div class="row" style="height: 100%;">
                                <div class="order col-md-4" style="height: 100%;">
                                    <img src="img/menu-burger.jpg" class="img-fluid img-pizza" alt="">
                                </div>
                                <div class="col-md">
                                    <p class="fw-bold fs-5 clear">Smokey Burger</p>
                                    <p class="fw-bolder fs-5 clear">$2.3</p>
                                    <p class="fw-normal">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                    <form action="http://localhost/p2/order.php">
                                        <input type="submit" class="btn-check" id="btncheck1" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-order d-flex align-items-center" for="btncheck1">Order Now</label>
                                    </form>
                                </div>
                            </div>
                            <!-- end row-->
                        </div>
                    </div>
                    <div class="col-md-6 clear d-flex justify-content-end">
                        <div class="p-3 border bg-light mybg" style="margin-right: 20px;">
                            <!-- start row -->
                            <div class="row" style="height: 100%;">
                                <div class="order col-md-4" style="height: 100%;">
                                    <img src="img/menu-burger.jpg" class="img-fluid img-pizza" alt="">
                                </div>
                                <div class="col-md">
                                    <p class="fw-bold fs-5 clear">Nice Burger</p>
                                    <p class="fw-bolder fs-5 clear">$2.3</p>
                                    <p class="fw-normal">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                    <form action="http://localhost/p2/order.php">
                                        <input type="submit" class="btn-check" id="btncheck1" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-order d-flex align-items-center" for="btncheck1">Order Now</label>
                                    </form>
                                </div>
                            </div>
                            <!-- end row-->
                        </div>
                    </div>
                    <div class="col-md-6 clear d-flex justify-content-start">
                        <div class="p-3 border bg-light mybg" style="margin-left: 20px;">
                            <!-- start row -->
                            <div class="row" style="height: 100%;">
                                <div class="order col-md-4" style="height: 100%;">
                                    <img src="img/pizza.jpg" class="img-fluid img-pizza" alt="">
                                </div>
                                <div class="col-md">
                                    <p class="fw-bold fs-5 clear">Food Title</p>
                                    <p class="fw-bolder fs-5 clear">$2.3</p>
                                    <p class="fw-normal">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                    <form action="http://localhost/p2/order.php">
                                        <input type="submit" class="btn-check" id="btncheck1" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-order d-flex align-items-center" for="btncheck1">Order Now</label>
                                    </form>
                                </div>
                            </div>
                            <!-- end row-->
                        </div>
                    </div>
                    <div class="col-md-6 clear d-flex justify-content-end">
                        <div class="p-3 border bg-light mybg" style="margin-right: 20px;">
                            <!-- start row -->
                            <div class="row" style="height: 100%;">
                                <div class="order col-md-4" style="height: 100%;">
                                    <img src="img/pizza.jpg" class="img-fluid img-pizza" alt="">
                                </div>
                                <div class="col-md">
                                    <p class="fw-bold fs-5 clear">Food Title</p>
                                    <p class="fw-bolder fs-5 clear">$2.3</p>
                                    <p class="fw-normal">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                    <form action="http://localhost/p2/order.php">
                                        <input type="submit" class="btn-check" id="btncheck1" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-order d-flex align-items-center" for="btncheck1">Order Now</label>
                                    </form>
                                </div>
                            </div>
                            <!-- end row-->
                        </div>
                    </div>
                    <div class="col-md-6 clear d-flex justify-content-start">
                        <div class="p-3 border bg-light mybg" style="margin-left: 20px;">
                            <!-- start row -->
                            <div class="row" style="height: 100%;">
                                <div class="order col-md-4" style="height: 100%;">
                                    <img src="img/menu-momo.jpg" class="img-fluid img-pizza" alt="">
                                </div>
                                <div class="col-md">
                                    <p class="fw-bold fs-5 clear">Chicken Steam Momo</p>
                                    <p class="fw-bolder fs-5 clear">$2.3</p>
                                    <p class="fw-normal">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                    <form action="http://localhost/p2/order.php">
                                        <input type="submit" class="btn-check" id="btncheck1" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-order d-flex align-items-center" for="btncheck1">Order Now</label>
                                    </form>
                                </div>
                            </div>
                            <!-- end row-->
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div>
                    <a class=" d-flex justify-content-center text-danger" style="text-decoration: none;" href="">See All Food</a>
                </div>
            </div>
        </div>
        <!-- end container main body-->
    </main>
    <footer>
        <!-- start container footer -->
        <div class="container-fluid clear">
            <div class="row d-flex d-flex align-items-center" style="height: 100px;">
                <div class="col-md">
                    <a href="" class="d-flex justify-content-end" style="float: right; width: 5%;"> <img src="logo/241349495_849337829057683_2974941694366778451_n.jpg" alt=""></a>
                </div>
                <div class="col-md-1">
                    <a href="" class="d-flex justify-content-center"> <img src="logo/241480874_1193542511151338_7986496005378251027_n.jpg" alt=""></a>
                </div>
                <div class="col-md">
                    <a href="" class="d-flex justify-content-start" style="float: left; width: 5%;"> <img src="logo/241410108_4557576517668422_7471832700354727107_n.jpg" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 d-flex justify-content-center">

                    <p class="text-muted ">
                        All rights reserved. Designed By <a href="#" class="text text-danger" style="text-decoration: none;">Đức Anh</a>.
                    </p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>