<?php          
    include('security.php');

        include('includes/header.php');
        include('includes/navbar.php');
?>

<div class="container-fluid">
<!-- Data tales eg -->
<div class="card shadow mb-4"> 
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Cylinder Stock Data
                
            </h6>   
</div>
<div class="card-body">
<div class="modal-body">


<?php

if(isset($_POST['edit_btnofcylinderstock']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * from cylinderstock where stockid='$id'";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
            <form action="code.php" method="POST">

            <input type="hidden" name="edit_id" value=" <?php echo $row['stockid'] ?>">


            <div class="form-group">
                <label>Stock ID</label>
                <input type="text" name="edit_stockid" value=" <?php echo $row['stockid']; ?>"class="form-control" placeholder="Enter Stock Id" required>
            </div>

            <div class="form-group">
                <label>Cylinder ID</label>
                <input type="text" name="edit_cylinderid" value=" <?php echo $row['cylinderid']; ?>"class="form-control" placeholder="Enter Cylidner Id" required>
            </div>


            <div class="form-group">
                <label>Vendor ID</label>
                <input type="text" name="edit_vendorid" value=" <?php echo $row['vendorid']; ?>"class="form-control" placeholder="Enter Vendor Id" required>
            </div>
            <div class="form-group">
                <label> Cylinder Quantity</label>
                <input type="text" name="edit_CylinderQuantity" value ="<?php echo $row['cylinderquantity']; ?>" class="form-control" placeholder="Enter cylinder quantity" required>
           
            
            <div class="form-group">
                <label> Note</label>
                <input type="text" name="edit_note" value ="<?php echo $row['note']; ?>" class="form-control" placeholder="Enter note" required>
            </div>



            <a href="cylinderstock.php" class="btn btn-danger">CANCEL  </a>
            <button type="submit" name="updatebtnofcylinderstock" class="btn btn-primary">
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