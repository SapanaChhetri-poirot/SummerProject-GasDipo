<?php 
    include_once 'resource/database.php';
    include_once 'resource/session.php';
    include_once 'resource/utilities.php';

?>

<?php $page_title = 'Feedback form';

        include_once 'partials/headers.php';
?>

<h2> Feed-back Form </h2> <hr> 

<div class="container" >
    <section class="col col-lg-7">
        <?php if(isset($result))
                echo $result;
        ?>

        <?php if(!empty($form_errors))
        {
           // echo show_errors($form_errors); 
        }
        ?>

    </section>
</div>

<div class="container">
        <section class="col col-lg-7">

        <form action="" method="post">
            <div class="form-group">
                <label for="emailField3"> Member ID: </label>
                <input type="text" class="form-control" name="ID" id="idField3" placeholder="Member Id">
            </div>
            <div class="form-group">
                <label for="usernameField3"> Username: </label>

                <input type="text" class="form-control" name="username" id="usernameField3" placeholder="Username">
            
            </div>

            <div class="form-group">
                <label for="messageField3">
                Message:
                </label>
                <textarea rows="7" class="form-control" name="textarea" id="messageField3" placeholder="Place your message here! ">
                </textarea> 
             </div>
             <button type="submit" class="btn btn-primary pull-right" name="feedback_sbt">
             Submit
             </button>
        </form>
        </section>
        <p>
            <a href="index.php"> Back </a>
        </p>
</div>