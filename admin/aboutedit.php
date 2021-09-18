<?php          
    include('security.php');

        include('includes/header.php');
        include('includes/navbar.php');
?>

<div class="container-fluid">
<!-- Data tales eg -->
<div class="card shadow mb-4"> 
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"> EDIT About US Page
                
            </h6>   
</div>
<div class="card-body">
<div class="modal-body">


<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * from aboutus where id='$id'";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
            <form action="code.php" method="POST">

            <input type="hidden" name="edit_id" value=" <?php echo $row['id'] ?>">

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="edit_title" value=" <?php echo $row['title']; ?>"class="form-control" placeholder="Enter Username">
            </div>

            <div class="form-group">
                <label>Sub Title</label>
                <input type="text" name="edit_subtitle" value ="<?php echo $row['subtitle']; ?>" class="form-control" placeholder="Enter subtitle">
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="description" name="edit_description" value="<?php echo $row['description']; ?>"class="form-control" placeholder="Enter description">
            </div>

            <div class="form-group">
                <label>Links</label> 
                <input type="text" name="edit_links" value=" <?php echo $row['links'] ?>" class="form-control">
                           </div>



            <a href="register.php" class="btn btn-danger">CANCEL  </a>
            <button type="submit" name="update_btn" class="btn btn-primary">
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