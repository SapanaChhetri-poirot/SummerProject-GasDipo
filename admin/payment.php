<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php'); ?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add Payment Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>

            <form action="code.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>OrderID</label>
                        <input type="text" name="orderid" class="form-control" placeholder="Enter Order Id" required>
                    </div>

                    
                    <!-- <input type="hidden" name="usertype" value="user"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" name="registerbtnofpayment" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">


    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Payment Profile
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add Payment Data
                </button>
            </h6>
        </div>
        <div class="card-body">

            <?php
            if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                echo '<h2> ' . $_SESSION['success'] . '</h2>';
                unset($_SESSION['success']);
            }


            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                echo '<h2 class="bg-info"> ' . $_SESSION['status'] . '</h2>';
                unset($_SESSION['status']);
            }

            ?>
            <div class="table-responsive">

               <?php
                $query = "SELECT * from payment ";
                $query_run = mysqli_query($connection, $query);




                ?>
                <table class="table table-bordred" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th> PaymentID </th>
                            <th> OrderID</th>
                            <th>UserID</th>
                            <th>Usercode</th>

                            <th>CylinderID </th>
                            <th>Price </th>
                            <th>Payment Method </th>
                            <th>Status </th>
                            <th>Remarks </th>

                            <th> EDIT </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>

                                <tr>

                                    <td><?php echo $row['paymentid']; ?></td>
                                    <td><?php echo $row['orderid']; ?></td>
                                    <td> <?php echo $row['userid']; ?></td>
                                    <td> <?php echo $row['usercode']; ?></td>

                                    <td> <?php echo $row['cylinderid']; ?></td>
                                    <td> <?php echo $row['price']; ?></td>
                                    <td> <?php echo $row['paymentmethod']; ?></td>
                                    <td> <?php echo $row['status']; ?></td>
                                    <td> <?php echo $row['remarks']; ?></td>

                                    <td>
                                        <form action="register_editofpayment.php" method="post">
                                            <input type="hidden" name="edit_paymentid" value="<?php echo $row['paymentid']; ?>">
                                            <button type="submit" name="edit_btnofpayment" class="btn btn-primary">
                                                EDIT
                                            </button>
                                        </form>
                                    </td>
                                    
                                </tr>

                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <?php include('includes/footer.php');

    include('includes/script.php');
    ?>