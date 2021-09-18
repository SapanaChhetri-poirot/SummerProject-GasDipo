<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php'); ?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add Employee Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>

            <form action="code.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Employee Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Enter Employee Id" required>
                    </div>

                    <div class="form-group">
                        <label> Name</label>
                        <input type="text"  name="name" class="form-control" placeholder="Enter Name" required>
                    </div>

                    <div class="form-group">
                        <label> Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                    </div>

                    <div class="form-group">
                        <label> DOB</label>
                        <input type="text" name="dob" class="form-control" placeholder="Enter Date of Birth" required>
                    </div>

                    <div class="form-group">
                        <label> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label> Phone number</label>
                        <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label> Post</label>
                        <input type="text" name="post" class="form-control" placeholder="Enter post" required>
                    </div>
                    <div class="form-group">
                        <label> Salary</label>
                        <input type="number" name="salary" class="form-control" placeholder="Enter Salary" required>
                    </div>
                    <div class="form-group">
                        <label> Joined date</label>
                        <input type="text" name="joineddate" class="form-control" placeholder="Enter Joined Date" required>
                    </div>
                    <div class="form-group">
                        <label> Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Enter Status (active or passive)" required>
                    </div>

                    
                    <!-- <input type="hidden" name="usertype" value="user"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" name="registerbtnofemployee" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">


    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Employees Data
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add Employees Data
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
                $query = "SELECT * from employee";
                $query_run = mysqli_query($connection, $query);




                ?>
                <table class="table table-bordred" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th> Name</th>
                            <th> Address</th>
                            <th> DOB</th>
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Post</th>
                            <th> Salary</th>
                            <th> Joined Date</th>
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
                                    <td><?php echo $row['name']; ?></td>
                                    <td> <?php echo $row['address']; ?></td>
                                    <td> <?php echo $row['dob']; ?></td>
                                    <td> <?php echo $row['email']; ?></td>
                                    <td> <?php echo $row['phone']; ?></td>
                                    <td> <?php echo $row['post']; ?></td>
                                    <td> <?php echo $row['salary']; ?></td>
                                    <td> <?php echo $row['joineddate']; ?></td>
                                    <td> <?php echo $row['status']; ?></td>



                                    <td>
                                        <form action="register_editofemployee.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btnofemployee" class="btn btn-success">
                                                EDIT
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete_btnofemployee" class="btn btn-danger">
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