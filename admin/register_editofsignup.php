<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Order Data

            </h6>
        </div>
        <div class="card-body">
            <div class="modal-body">


                <?php
               # $connection = mysqli_connect("localhost", "root", "", "db_gasdipo");

                if (isset($_POST['edit_btnofsignup'])) {
                    $id = $_POST['edit_id'];

                    $query = "SELECT * from signuprequests where id='$id'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $row) {
                ?>
                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value=" <?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label>Request ID</label>
                                <input type="text" name="edit_requestid" value=" <?php echo $row['id']; ?>" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="edit_username" value="<?php echo $row['username']; ?>" class="form-control" readonly>
                            </div>


                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="edit_address" value="<?php echo $row['address']; ?>" class="form-control" readonly>
                            </div>


                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" name="edit_dateofbirth" value="<?php echo $row['dateofbirth']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="edit_phonenumber" value="<?php echo $row['phonenumber']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="edit_email" value="<?php echo $row['email']; ?>" class="form-control" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label>Request Status</label>
                                <input type="text" name="edit_requeststatus" value="<?php echo $row['requeststatus']; ?>" class="form-control">
                            </div>


                            <a href="orders.php" class="btn btn-danger">CANCEL </a>
                            <button type="submit" name="updatebtnofrequest" class="btn btn-primary">
                                UPDATE
                            </button>
                        </form>
                <?php
                    }
                } ?>


            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container field -->










<?php


?>
<?php
include('includes/script.php');
include('includes/footer.php');

?>