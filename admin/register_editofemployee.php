<?php          
    include('security.php');

        include('includes/header.php');
        include('includes/navbar.php');
?>

<div class="container-fluid">
<!-- Data tales eg -->
<div class="card shadow mb-4"> 
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Employee Data
                
            </h6>   
</div>
<div class="card-body">
<div class="modal-body">


<?php

if(isset($_POST['edit_btnofemployee']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * from employee where id='$id'";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
            <form action="code.php" method="POST">

            <input type="hidden" name="edit_id" value=" <?php echo $row['id'] ?>">

            <div class="form-group">
                <label>Employee ID</label>
                <input type="text" name="edit_id" value=" <?php echo $row['id']; ?>"class="form-control" placeholder="Enter Id" required>
            </div>

            <div class="form-group">
                <label> Name
                </label>
                <input type="text" name="edit_name"  value ="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter Name" required>
            </div>

            <div class="form-group">
                <label> Address
                </label>
                <input type="text" name="edit_address"  value ="<?php echo $row['address']; ?>" class="form-control" placeholder="Enter Address" required>
            </div>

            <div class="form-group">
                <label> DOB
                </label>
                <input type="text" name="edit_dob"  value ="<?php echo $row['dob']; ?>" class="form-control" placeholder="Enter DOB" required>
            </div>

            <div class="form-group">
                <label> Email
                </label>
                <input type="text" name="edit_email"  value ="<?php echo $row['email']; ?>" class="form-control" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label> Name
                </label>
                <input type="text" name="edit_phone"  value ="<?php echo $row['phone']; ?>" class="form-control" placeholder="Enter Phone" required>
            </div>

            <div class="form-group">
                <label> Post
                </label>
                <input type="text" name="edit_post"  value ="<?php echo $row['post']; ?>" class="form-control" placeholder="Enter post" required>
            </div>

            <div class="form-group">
                <label> Salary
                </label>
                <input type="text" name="edit_salary"  value ="<?php echo $row['salary']; ?>" class="form-control" placeholder="Enter Salary" required>
            </div>

            <div class="form-group">
                <label> Joined Date
                </label>
                <input type="text" name="edit_joineddate"  value ="<?php echo $row['joineddate']; ?>" class="form-control" placeholder="Enter Joined Date" required>
            </div>

            <div class="form-group">
                <label> Status
                </label>
                <input type="text" name="edit_status"  value ="<?php echo $row['status']; ?>" class="form-control" placeholder="Enter Status" required>
            </div>

            


            <a href="cylinder.php" class="btn btn-danger">CANCEL  </a>
            <button type="submit" name="updatebtnofemployee" class="btn btn-primary">
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