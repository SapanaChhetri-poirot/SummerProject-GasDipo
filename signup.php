<?php
    include_once "resource/session.php"; 
    include_once "resource/database.php"; 
    include_once "resource/utilities.php"; 

?>

<?php 
    $page_title = 'Signup form';
    include_once 'partials/headers.php';
?>

<h2> Sign-up Form </h2> <hr />


<div class="container">
    <section class="col col-lg-7">
        <?php 
            if(isset($result))
            {
                echo $result;
            }        ?>
        <?php 
            if(!empty($from_errors))
            {
                echo show_errors($from_errors);
            }
        ?>
</div>

<div class="container">

            <section class="col col-lg-7">

                <form action="preview.php" method="post">
                    <div class="form-group> 
                        <label for="usernameField2"> Username: </label>

                         <input type="text" class="form-control" name="usernameField2" placeholder="Username"> 
                    </div>

                    <div class="form-group> 
                    <label for="addressField2"> Address: </label>
                    <input type="text" class="form-control" name="addressField2" placeholder="Address"> 
                    </div>

                    <div class="form-group> 
                    <label for="phonenumberField2"> Phone Number: </label>
                    <input type="text" class="form-control" name="phonenumberField2" placeholder="Phone Number"> 

                    <input type="text" class="form-control" name="phonenumberField2" placeholder="Phone Number"> 
                    </div>

                    <div class="form-group">
                        <label for="dateofbirthfield2"> Date of Birth:</label>
                        <input type="date" class="form-control" id="dateofbirthField2" name="birthday">
                    </div>



                    <div class="form-group">
                        <label for="memberField2"> Family Information </label>
                    </div>

                    <div class="form-group">
                        <label for="membernumberField2"> No of Members of Family: </label>
                        <select name="membernumberField2" id="membernumber">
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>
                             <option value="6">6</option>
                             <option value="7">7</option>
                             <option value="8">8</option>
                             <option value="9">9</option>
                             <option value="10">10</option>
                        </select>                     
                    </div>
                    
                    <div class="form-group> 
                    <label for="membernameField2"> Name of Members of Family: </label>
                    <input type="text" class="form-control" name="membernameField2" placeholder="Name of Members"> 
                    <input type="text" class="form-control" name="membernameField2" placeholder="Name of Members"> 
                    <input type="text" class="form-control" name="membernameField2" placeholder="Name of Members"> 
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="emailField2"> Email: </label>

                        <input type="text class="form-control" name="email" id="emailField2" placeholder="Email"> 
                    </div>

                    <div class="form-group> 
                    <label for="password2"> Password: </label>

                    <input type="password" class="form-control" name="password" placeholder="Password"> 
                    </div>

                    <div class="form-group> 
                    <label for="repassword2">Re-enter Password: </label>

                    <input type="password" class="form-control" name="repassword" placeholder="Re-enter Password"> 
                    </div>

                    <hr class="mb-3">

                    <input type="hidden" name="hdnIsSubmitted" value="1">
                    <button type="submit" class=" btn btn-primary pull-right" name="signup-sbt"> 

                        Sign up
                    </button>
                </form>
            </section>
        <p> <a href="index.php"> Back </a> </p>

</div>

<?php      include_once 'partials/footers.php'; ?>
                    

