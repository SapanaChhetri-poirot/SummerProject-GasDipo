<?php
session_start();
include('database/dbconfig.php');

if($dbconfig)
{
    //echo "Database Connected";

}
else
{
   header("Location: database/dbconfig.php");
}


if(!($_SESSION['username']))
{
 // $_SESSION['status'] = 'Login first';

 header('Location: login.php');
 }
?>
