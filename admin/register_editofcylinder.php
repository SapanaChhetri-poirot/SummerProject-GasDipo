<?php          
    include('security.php');

        include('includes/header.php');
        include('includes/navbar.php');
?>

<div class="container-fluid">
<!-- Data tales eg -->
<div class="card shadow mb-4"> 
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Cylinder Data
                
            </h6>   
</div>
<div class="card-body">
<div class="modal-body">


<?php

if(isset($_POST['edit_btnofcylinder']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * from cylinder where id='$id'";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
            <form action="code.php" method="POST">

            <input type="hidden" name="edit_id" value=" <?php echo $row['id'] ?>">

            <div class="form-group">
                <label>Cylinder ID</label>
                <input type="text" name="edit_id" value=" <?php echo $row['id']; ?>"class="form-control" placeholder="Enter Cylidner Id" required>
            </div>

            <div class="form-group">
                <label>Cylinder Brand Name
                </label>
                <input type="text" name="edit_name"  value ="<?php echo $row['name']; ?>" class="form-control" placeeholder="Enter Cylidner Brand Name" required>
            </div>


            <div class="form-group">
                <label>Cylinder Brand Price</label>
                <input type="text" name="edit_price" value ="<?php echo $row['price']; ?>" class="form-control" placeholder="Enter Cylidner Brand Price" required>
            </div>

            <div class="form-group">
                <label> Cylinder Brand Description</label>
                <input type="text" name="edit_description" value ="<?php echo $row['description']; ?>" class="form-control" placeholder="Enter Cylidner Brand Description" required>
            </div>



            <a href="employees.php" class="btn btn-danger">CANCEL  </a>
            <button type="submit" name="updatebtnofcylinder" class="btn btn-primary">
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