<?php

include('security.php');
include('includes/header.php');
include('includes/navbar.php'); ?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add Cylinder Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>

            <form action="code.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Cylinder Id</label>
                        <input type="text" name="cylinderid" class="form-control" placeholder="Enter Cylinder Id" required>
                    </div>

                    <div class="form-group">
                        <label>Cylinder Brand Name</label>
                        <input type="text"  name="cylindername" class="form-control" placeholder="Enter Cylinder Brand Name" required>
                    </div>

                    <div class="form-group">
                        <label> Cylinder Brand Price</label>
                        <input type="text" name="cylinderprice" class="form-control" placeholder="Enter Cylinder Brand Price" required>
                    </div>

                    <div class="form-group">
                        <label> Cylinder Brand Description</label>
                        <input type="text" name="cylinderdescription" class="form-control" placeholder="Enter Cylinder Brand Description" required>
                    </div>


                    
                    <!-- <input type="hidden" name="usertype" value="user"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" name="registerbtnofcylinder" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">


    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Cylinder Data
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add Cylinder Data
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
                $connection = mysqli_connect("localhost", "root", "", "db_gasdipo");
                $query = "SELECT * from cylinder ";
                $query_run = mysqli_query($connection, $query);




                ?>
                <table class="table table-bordred" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Cylinder ID</th>
                            <th>Cylinder Brand Name</th>
                            <th>Cylinder Brand Price</th>
                            <th>Cylinder Brand Description</th>

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
                                    <td> <?php echo $row['price']; ?></td>
                                    <td> <?php echo $row['description']; ?></td>

                                    <td>
                                        <form action="register_editofcylinder.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btnofcylinder" class="btn btn-success">
                                                EDIT
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete_btnofuser" class="btn btn-danger">
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