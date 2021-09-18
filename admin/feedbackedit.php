<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Feedback Data

            </h6>
        </div>
        <div class="card-body">
            <div class="modal-body">


                <?php

                if (isset($_POST['edit_btn'])) {
                    $id = $_POST['edit_id'];

                    $query = "SELECT * from feedback where id='$id'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $row) {
                ?>
                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value=" <?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label>Feedback ID</label>
                                <input type="text" name="edit_id" value=" <?php echo $row['id']; ?>" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="edit_userid" value="<?php echo $row['name']; ?>" class="form-control" readonly>
                            </div>


                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="edit_usercode" value="<?php echo $row['email']; ?>" class="form-control" readonly>
                            </div>


                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="" value="<?php echo $row['phonenumber']; ?>" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Feedback</label>
                                <input type="text" name="" value="<?php echo $row['feedback']; ?>"
                                 class="form-control" readonly>
                                 
                            </div>


                            <div class="form-group">
                                <label>Checked</label>
                                <input type="text" name="edit_checked" value="<?php echo $row['checked']; ?>" class="form-control">
                            </div>


                            <a href="feedback.php" class="btn btn-danger">CANCEL </a>
                            <button type="submit" name="updatebtnoffeedback" class="btn btn-primary">
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