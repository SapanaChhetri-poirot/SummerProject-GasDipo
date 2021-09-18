<?php 
session_start();
include('includes/header.php');
?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-5 col-lg-5 col-md5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Enter your information Here!</h1>

                                <?php

                                    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
                                    {
                                        echo '<h2 class="bg-success  text white">'.$_SESSION['status'].'</h2>';
                                        unset($_SESSION['status']);
                                    }
                                ?>
                            </div>

                            <form class="user" action="signupcode.php" method="POST">
                                <div class="form-group">
                                    <label type="form-control"> Name </label>
                                    <input type="text" name="username" class="form-control form-control-user"
                                        placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label type="form-control"> Address </label>
                                    <input type="text" name="address" class="form-control form-control-user"
                                        placeholder="Enter your address" required>
                                </div>
                                <div class="form-group">
                                    <label type="form-control"> Date of Birth </label>
                                    <input type="text" name="dateofbirth" class="form-control form-control-user"
                                        placeholder="Enter your date of birth" required>
                                </div>
                                <div class="form-group">
                                    <label type="form-control"> Phone Number </label>
                                    <input type="text" name="phonenumber" class="form-control form-control-user"
                                        placeholder="Enter your phonenumber">
                                </div>
                                <div class="form-group">
                                    <label type="form-control"> Email</label>
                                    <input type="text" name="email" class="form-control form-control-user checking-email"
                                        placeholder="Enter your email">
                                </div>
                                
                               
                                
                                <button type="submit" name="signup_btn" class="btn btn-primary btn-user btn-block">
                                    Sign Up
                               </button>

                                <hr>
                                <p class="text-center"> <a href="../index_1.php"> Go Back to Home Page</a>

                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>



<?php

include('includes/script.php');



?>