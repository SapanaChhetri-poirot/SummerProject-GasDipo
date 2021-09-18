<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php');
// include('includes/script.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>


    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="register.php"> Total Profiles </a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require 'database/dbconfig.php';
                                $query = "select id from register order by id";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);

                                echo '<h4> Admin: <b>' . $row . ' </b>  </h4>';
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a href="users.php" class="text-success"> Total users </a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $query = "select id from tbuser order by id";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);

                                    echo '<h4> User: <b>' . $row . '  </b> </h4>';
                                    ?>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <a href="orders.php" class="text-info">Total new orders</a>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            #require 'database/dbconfig.php';
                                            $query = "select orderid from tborder where orderstatus='pending' order by orderid";
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);

                                            echo '<h4> Orders: <b> ' . $row . ' </b> </h4>';
                                            ?>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <a href="signuprequest.php" class="text-warning"> Total new signup </a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                   # require 'database/dbconfig.php';
                                    $query = "select id from signuprequests where
                                                     requeststatus='pending' order by id";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);

                                    echo '<h4> Requests: <b>' . $row . ' </b>  </h4>';
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <a href="feedback.php" class="text-warning"> Total new feedback </a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                  #  require 'database/dbconfig.php';
                                    $query = "select id from feedback where checked='no' order by id";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);

                                    echo '<h4> Feedback: <b>' . $row . ' </b>  </h4>';
                                    ?>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="orders.php" class="text-info"> Delivery Remaining </a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                  #  require 'database/dbconfig.php';
                                    $query = "select orderid from tborder where
                                                     orderstatus='pending' AND delivery='yes' order by orderid";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);

                                    echo '<h4> Delivery: <b>' . $row . ' </b>  </h4>';
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="payment.php" class="text-success"> Payment Remaining </a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                  #  require 'database/dbconfig.php';
                                    $query = "select paymentid from payment where
                                                     status!='received' order by paymentid";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);

                                    echo '<h4> Payment: <b>' . $row . ' </b>  </h4>';
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php include('includes/script.php');
include('includes/footer.php');

?>