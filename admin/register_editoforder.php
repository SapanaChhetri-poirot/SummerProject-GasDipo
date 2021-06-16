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
                $connection = mysqli_connect("localhost", "root", "", "db_gasdipo");

                if (isset($_POST['edit_btnoforder'])) {
                    $orderid = $_POST['edit_orderid'];

                    $query = "SELECT * from tborder where orderid='$orderid'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $row) {
                ?>
                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value=" <?php echo $row['orderid'] ?>">

                            <div class="form-group">
                                <label>OrderID</label>
                                <input type="text" name="edit_orderid" value=" <?php echo $row['orderid']; ?>" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>UserID</label>
                                <input type="text" name="edit_userid" value="<?php echo $row['userid']; ?>" class="form-control" readonly>
                            </div>


                            <div class="form-group">
                                <label>Usercode</label>
                                <input type="text" name="edit_usercode" value="<?php echo $row['usercode']; ?>" class="form-control" readonly>
                            </div>


                            <div class="form-group">
                                <label>CylinderTD</label>
                                <input type="text" name="edit_cylinderid" value="<?php echo $row['cylinderid']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Cylinder Brand</label>
                                <input type="text" name="edit_cylinderbrand" value="<?php echo $row['cylinderbrand']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="edit_quantity" value="<?php echo $row['quantity']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="edit_price" value="<?php echo $row['price']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Payment Method</label>
                                <input type="text" name="edit_paymentmethod" value="<?php echo $row['paymentmethod']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Delivery</label>
                                <input type="delivery" name="edit_delivery" value="<?php echo $row['delivery']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Order Status</label>
                                <input type="text" name="edit_orderstatus" value="<?php echo $row['orderstatus']; ?>" class="form-control">
                            </div>


                            <a href="orders.php" class="btn btn-danger">CANCEL </a>
                            <button type="submit" name="updatebtnoforder" class="btn btn-primary">
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