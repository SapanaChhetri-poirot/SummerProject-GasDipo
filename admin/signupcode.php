<?php
//session_start();
include('security.php');
$connection = mysqli_connect("localhost","root","","db_gasdipo");

if(isset($_POST['signup_btn']))
{
    $username = $_POST['username']; 
    $address = $_POST['address']; 
    $dateofbirth = $_POST['dateofbirth']; 
    $phonenumber = $_POST['phonenumber']; 
    $email = $_POST['email']; 



    $query = "Insert into signuprequests (username, address, dateofbirth, phonenumber, email, orderstatus) values('$username', '$address','$dateofbirth','$phonenumber','$email', 'pending') ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    
    {    $_SESSION['status'] = "Your request for signup has been submitted. We will get back to you on your phone number as soon as we can"; 
      header('Location: signup.php');

    }
    else{
      $_SESSION['status'] = "Your request for signup has not been submitted";
      header('Location: signup.php');
    }
}

    
  


 
 
?>