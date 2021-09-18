<?php          
    include('security.php');

        include('includes/header.php');
        include('includes/navbar.php');
?>

<div class="container-fluid">
<!-- Data tales eg -->
<div class="card shadow mb-4"> 
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"> EDIT User Data
                
            </h6>   
</div>
<div class="card-body">
<div class="modal-body">


<?php
#$connection = mysqli_connect("localhost","root","","db_gasdipo");

if(isset($_POST['edit_btnofuser']))
{
    $usercode = $_POST['edit_usercode'];

    $query = "SELECT * from tbuser where usercode='$usercode'";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
            <form action="code.php" method="POST">

            <input type="hidden" name="edit_id" value=" <?php echo $row['id'] ?>">

            <div class="form-group">
                <label>Userid</label>
                <input type="text" name="edit_userid" value=" <?php echo $row['id']; ?>"class="form-control" placeholder="Enter Username">
            </div>

            <div class="form-group">
                <label>Usercode</label>
                <input type="text" name="edit_usercode"  value ="<?php echo $row['usercode']; ?>" class="form-control" placeeholder="Enter Usercode">
            </div>


            <div class="form-group">
                <label>Username</label>
                <input type="text" name="edit_username" value ="<?php echo $row['username']; ?>" class="form-control" placeholder="Enter Username">
            </div>


            <a href="users.php" class="btn btn-danger">CANCEL  </a>
            <button type="submit" name="updatebtnofuser" class="btn btn-primary">
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