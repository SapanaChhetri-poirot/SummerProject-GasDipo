<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php'); ?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add Vendors Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>

            <form action="code.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Vendor Id</label>
                        <input type="text" name="vendorid" class="form-control" placeholder="Enter Vendor Id" required>
                    </div>

                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text"  name="companyname" class="form-control" placeholder="Enter Company Name" required>
                    </div>

                    <div class="form-group">
                        <label> Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                    </div>

                    <div class="form-group">
                        <label> Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>

                    

                    <div class="form-group">
                        <label> Phone number</label>
                        <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                    </div>

                    <div class="form-group">
                        <label> Cylinder ID</label>
                        <input type="text" name="cylinderid" class="form-control" placeholder="Enter Cylinder ID" required>
                    </div>
                    
                    
                    <div class="form-group">
                        <label> Price of Cylinder</label>
                        <input type="text" name="priceofcylinder" class="form-control" placeholder="Enter Price of Cylinder" required>
                    </div>
                    <div class="form-group">
                        <label> Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Enter Status (active or passive)" required>
                    </div>

                    
                    <!-- <input type="hidden" name="usertype" value="user"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" name="registerbtnofvendor" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">


    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Vendors Data
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add Vendors Data
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
                $query = "SELECT * from vendor";
                $query_run = mysqli_query($connection, $query);




                ?>
                <table class="table table-bordred" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Vendor ID</th>
                            <th>Company Name</th>
                            <th> Address</th>
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Cylinder ID</th>
                            <th> Price of Cylinder</th>
                            <th> Status</th>

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

                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['companyname']; ?></td>
                                    <td> <?php echo $row['address']; ?></td>
                                    <td> <?php echo $row['email']; ?></td>
                                    <td> <?php echo $row['phone']; ?></td>
                                    <td> <?php echo $row['cylinderid']; ?></td>
                                    <td> <?php echo $row['priceofcylinder']; ?></td>
                                    <td> <?php echo $row['status']; ?></td>



                                    <td>
                                        <form action="register_editofvendor.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btnofvendor" class="btn btn-success">
                                                EDIT
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete_btnofvendor" class="btn btn-danger">
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