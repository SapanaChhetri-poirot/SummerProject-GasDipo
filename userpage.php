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
<?php include('admin/security.php');
 ?>

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
                <li class="nav-item text-white">
                     <?php echo  $_SESSION['username']?>
                    </li>
                   
                    </ul>

            </div>
        </div>
    </nav>

    <!--//navbar end-->


<!-- modal-->


    <!-- start of jumbotron -->
    <div class="jumbotron my-0">
    
   <!-- <h4 class="text-center"> Note:</h4>--><h2 class="text-center">
    Hello! Welcome <?php echo $_SESSION['username'];?>. Choose any one of the following:</h2><br>
       <ul class="list-group">
       
       <li class="list-group-item"> <p class="p-100 text-center">  <a href="personaldetails.php"> View Personal Details</a> </p></li>

       <li class="list-group-item"> <p class="p-100 text-center">  <a href="history.php"> View  History</a> </p></li>


     <li class="list-group-item">   <p class="text-center"><a href="order.php"> Place an order </a> </p></li>
     <li class="list-group-item">   <p class="text-center"><a href="index_1.php"> Log Out </a> </p></li>

       </ul><br>
        
    </div>

    <!-- end -->


                <!--footer -->
                <p class="p-3 bg-dark text-white text-center my-0"> @GasDipoHouse</p>

                <!-- footer end-->


                </head>
</body>
</html>