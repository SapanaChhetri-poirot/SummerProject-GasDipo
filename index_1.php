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
            <a class="navbar-brand" href="index_1.php"> <b> Gas Dipo </b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index_1.php"> <b>Home </b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php"> <b> Services </b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php"> <b>About </b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php"> <b> Contact </b></a>
                    </li>

                   <!-- <li class="nav-item">
                        <a class="nav-link" href="orderform.php">Order</a>
                    </li>-->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                     <b>   <?php echo 'Order' ?></b>
                    </span>
                   
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="admin/login.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Login
                    </a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="admin/signup.php"> <!--data-toggle="modal" data-target="#logoutModal">-->
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Signup
                    </a>
                </div>
            </li>

                </ul>

            </div>
        </div>
    </nav>

    <!--//navbar end-->




    <!-- carausel_start -->
    <div class="bg-light">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/gasstove1.jpg" alt="Los Angeles" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Gas Stove</h3>
                        <p>We sell all brands available in Nepal.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/gasstove2.jpg" alt="Chicago" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Cylinders</h3>
                        <p>We have selected brandsd of cylidner!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/gasstove3.jpg" alt="New York" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Our Office </h3>
                        <p>We are one big family.!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- //carousel end -->


        <!-- About us with grid -->
        <section class="mt-5">
            <div class="py-5 bg-light">

                <h1 class="text-center" > <b> About Us </b></h1>
            </div>
            <div class="container-fluid bg-light">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images/gasstove1.jpg" class="img-fluid aboutimage">
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="display-4"> We are Gas Dipo.</h2>
                        <p class="py-3"> wgefuiwfhjw ffuiwf wifhw fhywuif hwvfiuw ivhwv ywv iowvyowy vfywvf iwhvdjnvdjkvfhd ve
                            fvefvefv efv efvefv fbe fbf befgve fvgjeh fveevfhuie hgeuiyg uehuigry euirguei gyeu ghuieygiuergergyeirgy
                            eyirg uiegg ergy erg uiegyuieryguieg
                        </p>

                        <a href="aboutus.php">Check More</a>
                    </div>
                </div>
            </div>

    </div>



    </section>
    <!-- about us end -->



    <!-- services start -->

    <section class="mt-0">
        <div class="py-5 bg-light">
<br> <br>
            <h1 class="text-center"> <b> Our Services </b></h1>
        </div>
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/gasstove2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Gas Cylinder</h4>
                            <p class="card-text">We Deliver Gas Cylidner</p>
                            <a href="services.php">See Profile</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/gasstove2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Gas Cylinder</h4>
                            <p class="card-text">We Deliver Gas Cylidner</p>
                            <a href="services.php">See Profile</a>
                        </div>
                    </div>

                </div>


            </div>


        </div>

    </section>

    <!-- services end->



    <!-- gallery start -->


    <section class="my-0 bg-light">
        <div class="py-5">
<br> <br> 
            <h1 class="text-center"> <b> Gallery </b></h1>
        </div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>


                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gasstove1.jpg" class="img-fluid pb-4">


                </div>
            </div>
        </div>

    </section>

    <!-- galllery end-->


    <!-- contact us form-->

    <section class="my-0 bg-light">
        <div class="py-5">
<br> <br>
            <h1 class="text-center"> <b> Contact Us </b></h1>
        </div>
        <div class="w-50 m-auto">
            <form action="feedback1.php" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" autocomplete="off" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" autocomplete="off" class="form-control checking-email" required>
                </div>


                <div class="form-group">
                    <label>Phone Number </label>
                    <input type="number" name="phonenumber" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Feedback</label>
                    <textarea class="form-control" name="feedback" rows="5" required>
                </textarea>
                </div>

                <button type="submit" name="feedback_btn" class="btn btn-primary"> Submit</button>
                <br> 
            </form>
<br><br>
        </div>
    </section>

    <!-- contact us end-->

    <!-- start of jumbotron -->
    <div class="jumbotron mb-0">
        <section class="my-0 mb-0">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <b>Quick Links</b></h4>

                                <p> <a href="#">Home</a> <br> </p>
                                <p> <a href="services.php">Services</a> <br> </p>
                                <p> <a href="aboutus.php">About Us</a> <br> </p>

                                <a href="contactus.php">Contact Us</a> <br>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <b>Contact Info </b></h4>
                                <p class="card-text">Sundarijal, Kathmandu</p>
                                <p class="card-text">9898989898, 9851233445</p>
                                <p class="card-text"> 4325345</p>

                                <p class="card-text">info@gasdipo.com</p>
                                <!--  <a href="#" class="btn btn-primary">See Profile</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    </div>
<div class="">
    <!--footer -->
    <p class="p-4 my-0 mt-0 bg-dark text-white text-center"> @GasDipoHouse</p>
</div>
    <!-- footer end-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>