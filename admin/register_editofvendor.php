<?php          
    include('security.php');

        include('includes/header.php');
        include('includes/navbar.php');
?>

<div class="container-fluid">
<!-- Data tales eg -->
<div class="card shadow mb-4"> 
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Vendor Data
                
            </h6>   
</div>
<div class="card-body">
<div class="modal-body">


<?php

if(isset($_POST['edit_btnofvendor']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * from vendor where id='$id'";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
            <form action="code.php" method="POST">

            <input type="hidden" name="edit_id" value=" <?php echo $row['id'] ?>">

            <div class="form-group">
                <label>Vendor ID</label>
                <input type="text" name="edit_vendorid" value=" <?php echo $row['id']; ?>"class="form-control" placeholder="Enter Vendor Id" required>
            </div>

            <div class="form-group">
                <label>Company Name
                </label>
                <input type="text" name="edit_companyname"  value ="<?php echo $row['companyname']; ?>" class="form-control" placeholder="Enter Company Name" required>
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" name="edit_address" value ="<?php echo $row['address']; ?>" class="form-control" placeholder="Enter Address" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value ="<?php echo $row['email']; ?>" class="form-control" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="number" name="edit_phone" value ="<?php echo $row['phone']; ?>" class="form-control" placeholder="Enter Phone" required>
            </div>

            <div class="form-group">
                <label>Cylinder ID</label>
                <input type="text" name="edit_cylinderid" value ="<?php echo $row['cylinderid']; ?>" class="form-control" placeholder="Enter Cylinder ID" required>
            </div>

            <div class="form-group">
                <label>Price of Cylinder</label>
                <input type="number" name="edit_priceofcylinder" value ="<?php echo $row['priceofcylinder']; ?>" class="form-control" placeholder="Enter Price of Cylidner" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" name="edit_status" value ="<?php echo $row['status']; ?>" class="form-control" placeholder="Enter Status" required>
            </div>



            <a href="vendors.php" class="btn btn-danger">CANCEL  </a>
            <button type="submit" name="updatebtnofvendor" class="btn btn-primary">
                UPDATE
            </button>
            </form>
            <?php
    }
}?>


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