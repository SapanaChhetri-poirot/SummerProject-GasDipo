<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php'); ?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add Cylinder Stock Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>

            <form action="code.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Stock ID</label>
                        <input type="text" name="stockid" class="form-control" placeholder="Enter Stock Id" required>
                    </div>


                    <div class="form-group">
                        <label>Cylinder ID</label>
                        <input type="text" name="cylinderid" class="form-control" placeholder="Enter Cylinder Id" required>
                    </div>

                    <div class="form-group">
                        <label>Vendor ID</label>
                        <input type="text" name="vendorid" class="form-control" placeholder="Enter Vendor ID" required>
                    </div>

                    <div class="form-group">
                        <label> Cylinder Quantity</label>
                        <input type="text" name="cylinderquantity" class="form-control" placeholder="Enter Cylinder Quantity" required>
                    </div>

                    <div class="form-group">
                        <label> Note</label>
                        <input type="text" name="note" class="form-control" placeholder="Enter note" required>
                    </div>



                    <!-- <input type="hidden" name="usertype" value="user"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" name="registerbtnofcylinderstock" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">


    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Cylinder Stock Details
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add Cylinder Stock Data
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
                $query = "SELECT * from cylinderstock ";
                $query_run = mysqli_query($connection, $query);




                ?>
                <table class="table table-bordred" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Stock ID</th>

                            <th>Cylinder ID</th>
                            <th>Vendor ID</th>

                            <th>Cylinder Quantity</th>
                            <th>Note</th>

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
                                    <td><?php echo $row['stockid']; ?></td>

                                    <td><?php echo $row['cylinderid']; ?></td>
                                    <td><?php echo $row['vendorid']; ?></td>
                                    <td> <?php echo $row['cylinderquantity']; ?></td>
                                    <td> <?php echo $row['note']; ?></td>

                                    <td>
                                        <form action="register_editofcylinderstock.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['stockid']; ?>">
                                            <button type="submit" name="edit_btnofcylinderstock" class="btn btn-success">
                                                EDIT
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['stockid']; ?>">
                                            <button type="submit" name="delete_btnofcylinderstock" class="btn btn-danger">
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