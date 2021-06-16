<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php'); ?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add User Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>

            
        </div>
    </div>
</div>

<div class="container-fluid">


    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Order Data

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
                $connection = mysqli_connect("localhost", "root", "", "db_gasdipo");
                $query = "SELECT * from tborder ";
                $query_run = mysqli_query($connection, $query);




                ?>
                <table class="table table-bordred" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>OrderID</th>
                            <th>UserID</th>
                            <th>UserCode</th>
                            <th>CylinderID</th>
                            <th>CylinderBrand</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Payment Method</th>
                            <th>Delivery</th>
                            <th> Order Status </th>
                            <th> EDIT </th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>

                                <tr>

                                    <td><?php echo $row['orderid']; ?></td>
                                    <td><?php echo $row['userid']; ?></td>
                                    <td> <?php echo $row['usercode']; ?></td>
                                    <td> <?php echo $row['cylinderid']; ?></td>
                                    <td> <?php echo $row['cylinderbrand']; ?></td>
                                    <td> <?php echo $row['quantity']; ?></td>
                                    <td> <?php echo $row['price']; ?></td>
                                    <td> <?php echo $row['paymentmethod']; ?></td>
                                    <td> <?php echo $row['delivery']; ?></td>
                                    <td> <?php echo $row['orderstatus']; ?></td>
                                    <td>
                                        <form action="register_editoforder.php" method="post">
                                            <input type="hidden" name="edit_orderid" value="<?php echo $row['orderid']; ?>">
                                            <button type="submit" name="edit_btnoforder" class="btn btn-success">
                                                EDIT
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_order" value="<?php echo $row['usercode']; ?>">
                                            <button type="submit" name="delete_btnoforder" class="btn btn-danger">
                                                DELETE
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