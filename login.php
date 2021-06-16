<?php
    include_once "resource/session.php"; 
    include_once "resource/database.php"; 
    include_once "resource/utilities.php"; 

?>



<?php $page_title = 'Login Form';

 include_once 'partials/headers.php';
  ?>

<?php include_once 'partials/parseLogin.php'; ?>


<h2> Login form </h2> <hr>

<div class="container">
    <section class="col col-lg-7">
    <?php 
        if(isset($result))
        {
            echo $result;
        }

    ?>
    <?php
        if(!empty($form_errors))
        {
           echo show_errors($form_errors);
        }
    ?>
    </section>
</div>


<div class="container">
    <section class="col col-lg-7">

    
      <form action="" method="post">
            <div class="form-group">
                <label for="usernameField1"> Username: </label>
                <input type="text" class="form-control" name="username" id="usernameField1" placeholder="Username" required>
            </div>

        <div class="form-group">    
            <label for="password1"> Password: </label>
            <input type="password" class="form-control" name="password" id="password1" placeholder="Password" required>
        </div>    

        <div class="checkbox">
            <label>
                
            <input type="checkbox" checked="true" value="yes" name="remember"> Rememebr me. 
            </label>
                <br>
                <hr class="mb-3">
            <input type="hidden" name="token" value="<?php echo _token();?>">
            <button type="submit" class="btn btn-primary pull-right" name="login_sbt"> Log In</button>
        </div>

        </br>
        
            <!-- for password recovery  <a href="password_recovery.php"> Forgot Password? </a>   -->


        </form>
        
    </section>

<p> 
    <a href="index.php"> Back </a>   </p>    
</div>

 
        <php
            include_once 'partials/footers.php'; 
        ?>

    