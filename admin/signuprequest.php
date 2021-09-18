<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php'); ?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Sign Up Requests</h5>
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
            <h6 class="m-0 font-weight-bold text-primary"> Sign Up Requests
                
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
                $query = "SELECT * from signuprequests ";
                $query_run = mysqli_query($connection, $query);




                ?>
                <table class="table table-bordred" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Username</th>
                            <th>Address</th>
                            <th>Date of Birth</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Request Status</th>
                            <th> EDIT </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>

                                <tr>

                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td> <?php echo $row['address']; ?></td>
                                    <td> <?php echo $row['dateofbirth']; ?></td>
                                    <td> <?php echo $row['phonenumber']; ?></td>
                                    <td> <?php echo $row['email']; ?></td>
                                    <td> <?php echo $row['requeststatus']; ?></td>
                                    
                                    <td>
                                        <form action="register_editofsignup.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btnofsignup" class="btn btn-success">
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