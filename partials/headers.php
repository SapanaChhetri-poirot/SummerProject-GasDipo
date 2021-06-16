<?php 
    include_once 'resource/session.php';    
    include_once 'resource/utilities.php';

?>


<!DOCTYPE html?
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE+edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
         <?php   if(isset($page_title))
            {
                echo $page_title;
            }
            ?> 
        </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

        <!-- later add css and javascript -->


</head>

<body>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"> Toggle navigation </span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            
                        </button>

                        <a class="navbar-brand" href="index.php"> Main page </a>

                    </div>


                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <i class="hide">
                              <!--  <php echo guard(); ?> -->
                            </i>

                            <?php
                                if(!isset($_SESSION['username']))
                                {
                                  //  isCookieValid($db);
                                }
                            ?>
                            <?php
                                if(isset($_SESSION['username'])) :?>
                                <li> <a href="profile.php"> My Profile </a> </li>
                                <li> <a href="logout.php"> Logout </a> </li>
                            <?php else: ?>
                                <li> <a href="login.php"> Login </a> </li>
                                <li> <a href="signup.php"> Signup </a> </li>
                                <li> <a href="feedback.php"> Feedback </a> </li>


                                <?php endif ?>
                        </ul>
                    </div>
                </div>
            </nav>
