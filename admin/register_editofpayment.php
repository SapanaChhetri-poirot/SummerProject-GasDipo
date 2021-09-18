<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">
    <!-- Data tales eg -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Payment Data

            </h6>
        </div>
        <div class="card-body">
            <div class="modal-body">


                <?php
              #  $connection = mysqli_connect("localhost", "root", "", "db_gasdipo");

                if (isset($_POST['edit_btnofpayment'])) {
                    $paymentid = $_POST['edit_paymentid'];
                  
                    $query = "SELECT * from payment where paymentid='$paymentid'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $row) {
                ?>
                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_paymentid" value=" <?php echo $row['paymentid'] ?>">

                            <div class="form-group">
                                <label>PaymentID</label>
                                <input type="text" name="edit_paymentid" value=" <?php echo $row['paymentid']; ?>" class="form-control" readonly>
                            </div>

                            
                            
                            <div class="form-group">
                                <label>OrderID</label>
                                <input type="text" name="edit_orderid" value=" <?php echo $row['orderid']; ?>" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>UserID</label>
                                <input type="text" name="edit_userid" value="<?php echo $row['userid']; ?>" class="form-control" readonly>
                            </div>


                            <div class="form-group">
                                <label>CylinderID</label>
                                <input type="text" name="edit_cylinderid" value="<?php echo $row['cylinderid']; ?>" class="form-control" readonly>
                            </div>


                            
                            <div class="form-group">
                                <label>Price </label>
                                <input type="text" name="edit_price" value="<?php echo $row['price']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Payment Method</label>
                                <input type="text" name="edit_paymentmethod" value="<?php echo $row['paymentmethod']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="edit_status" value="<?php echo $row['status']; ?>" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label> Remarks </label>
                                <input type="text" name="edit_remarks" value="<?php echo $row['remarks']; ?>" class="form-control" >
                            </div>
                            
                            <a href="payment.php" class="btn btn-danger">CANCEL </a>
                            <button type="submit" name="updatebtnofpayment" class="btn btn-primary">
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