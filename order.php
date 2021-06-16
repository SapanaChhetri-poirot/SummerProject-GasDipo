<!DOCTYPE html>
<html>

<head>
    <title>

    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>

<body>


    <!-- //navbar_start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="images/gasstove1.jpg" width="40px" height="40px">

            <a class="navbar-brand" href="index_1.php">Gas Dipo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index_1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="orderform.php">Order</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!--//navbar end-->


<!-- modal-->


    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-5 col-md5">


                <!-- <div class="col-xl-5 col-lg-5 col-md5"> -->

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" class="text-left">Place an order!                                         
                                          </h1>

                                    </div>

                                    <hr>

                                    <form class="user" action="ordercode.php" method="POST">

                                    <div class="form-group">
                                            <label class="form-group"> User Id: </label>
                                            <input type="text" name="userid" class="form-control form-control-user" placeholder="Enter UserID" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-group"> User Code: please make sure that your usercode is correct. </label>
                                            <input type="text" name="usercode" class="form-control form-control-user" placeholder="Enter Usercode" required>
                                        </div>

                        


                                        <div class="form-group">
                                            <label class="form-group"> Cylinder Brand: </label>
                                            <select name="cylinderbrand" class=" form-select" aria-label=".form-select-lg example" required>
                                                <option selected>Select a brand of your chioce:</option>
                                                <option value="Brand One">Brand One</option>
                                                <option value="Brand Two">Brand Two</option>
                                                <option value="Brand Three">Brand Three</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-group"> Quantity: </label> <br>
                                            <select name="quantity" class=" form-select" aria-label=".form-select-lg example" required>
                                                <option selected>Select a quantity of your chioce:</option>
                                                <option value="1">1</option>
                                                <option value="2"> 2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>


                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-group"> Payment Method </label>
                                            <select  name="paymentmethod" class=" form-select" aria-label=".form-select-lg example" required>
                                                <option selected>Select a method of your chioce:</option>
                                                <option value="Cash On Delivery">Cash On Delivery</option>
                                                <option value="Credit">Credit</option>
                                                <option value="Scan and Pay">Scan and Pay</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-group"> Delivery: </label> <br>
                                            <select name="delivery" class=" form-select" aria-label=".form-select-lg example" required>
                                                <option selected>Select one of your choice:</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <hr>


                                        <button  name="preview_btn" class="btn btn-primary">
                                            Order
                                            </button>
                                            
                                       <hr> <p > <a href="orderform.php">Go Back </a> </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--footer -->
                <p class="p-3 bg-dark text-white text-center"> @GasDipoHouse</p>

                <!-- footer end-->


                </head>
</body>