<?php 

if(isset($_POST['feedback_btn']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$feedback = $_POST['feedback'];


$connection = mysqli_connect("localhost","root","","db_gasdipo");
$query = "Insert into feedback (name, email, phonenumber, feedback, checked) values('$name','$email',
                '$phonenumber','$feedback','no')";
    
$query_run = mysqli_query($connection, $query);

if($query_run)
{       
        header('Location: index_1.php');
} 
else{
    header('Location: index.php');

}
}
?>