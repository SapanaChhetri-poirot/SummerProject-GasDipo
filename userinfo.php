<?php 

$connection = mysqli_connect("localhost","root","","db_gasdipo");


if($connection)
{
    echo "succeed";
}
else
{
echo "not succeed";
}
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
//$comments = $_POST['comments'];

$query = "Insert into contactus (username,email,comments,phone) values('$user','$email','$comments','$mobile')";
mysqli_query($connection,$query);
header('location: index_1.php');

?>