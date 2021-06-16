<?php
    $page_title = 'Main Page';
    include_once 'partials/headers.php';

    include_once 'resource/Database.php';

?>

<div class="container">
    <div class="flag">
        <p class="lead">
            <?php if(isset($_SESSION['username'])): ?>

                <p class="lead"> You are logged in as {<?php echo $_SESSION['username']?>} see your profile:

                <a href="profile.php">Profile</a>
                </br>
                <a href="logout.php"> Logout </a>

             <?php else: ?>
                    <p class="lead"> You are not currently signed in <a href="admin/login.php"> Login </a> Not a member yet? <a href="signup.php"> Signup </a> </p>

                    <?php endif ?>

                    <p class="lead"> Please give us <a href="feedback.php"> Feed-back </a></p>
        </p>        
    </div>
</div>

<?php include_once 'partials/footers.php';?>