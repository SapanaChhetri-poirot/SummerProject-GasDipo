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


<?php
    include('admin/security.php'); ?>
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
                        <a class="nav-link " aria-current="page" href="personaldetails.php"> <b>Personal Details </b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="history.php"> <b>History </b></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="order.php"> <b>Order </b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index_1.php"> <b>Log Out </b></a>
                    </li>
                  

                </ul>

            </div>
        </div>
    </nav>

    <!--//navbar end-->


    <!-- modal-->


    <!-- start of jumbotron -->
    <!-- <div class="jumbotron my-0">
    
      <table>
       
         <tr> <a href="personaldetails.php"> View Personal Details</a> </tr>

       <tr> <a href="history.php"> View  History</a> </tr>


      <tr><a href="order.php"> Place an order </a> </tr>
      <tr><a href="index_1.php"> Log Out </a> </tr>

      </table>
        
    </div>-->
 
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-10 col-md10">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"> History</h1>


 <?php                   if (isset($_SESSION['username'])) {
                       $username=$_SESSION['username'];
                        $query = "SELECT usercode from register where username='$username'";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $row) { $usercode=$row['usercode']; }}
                    ?>
                      <!--      <form action="code.php" method="POST">

                                
                                <div class="form-group">
                                    <label>ID <?php //echo $row['usercode']; ?></label> <?php //echo $row['usercode']; ?>
                                </div>
                            </form>
               <?php
                    //    }
                   // } ?>

--->
                       <?php     if($usercode)
                       
                    {
                        $query = "SELECT * from tborder where usercode='$usercode'";
                        $query_run = mysqli_query($connection, $query);

                        ?>
                <table class="table table-bordred" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>CylinderID</th>
                            <th>CylinderBrand</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Payment Method</th>
                            <th>Delivery</th>
                            <th> Order Status </th>
                            <th> Order Date </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>

                                <tr>
                                      <td> <?php echo $row['cylinderid']; ?></td>
                                    <td> <?php echo $row['cylinderbrand']; ?></td>
                                    <td> <?php echo $row['quantity']; ?></td>
                                    <td> <?php echo $row['price']; ?></td>
                                    <td> <?php echo $row['paymentmethod']; ?></td>
                                    <td> <?php echo $row['delivery']; ?></td>
                                    <td> <?php echo $row['orderstatus']; ?></td>
                                    <td> <?php echo $row['orderdate']; ?></td>

                                    
                                </tr>

                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
                      <!--  foreach ($query_run as $row) {?>-->
                           

                           
                      <?php  }


                            ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container field -->
                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>



    <!-- end -->


    <!--footer -->
    <p class="p-3 bg-dark text-white text-center my-0"> @GasDipoHouse</p>

    <!-- footer end-->


    </head>
</body>

</html>