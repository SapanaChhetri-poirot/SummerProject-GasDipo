<?php 

if(isset($_POST['login_btn']))
{
    $userid = $_POST['userid'];

$usercode = $_POST['usercode'];
$cylinderid = $_POST['cylinderid'];
$cylinderbrand = $_POST['cylinderbrand'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$paymentmethod = $_POST['paymentmethod'];
$delivery = $_POST['delivery'];


$connection = mysqli_connect("localhost","root","","db_gasdipo");
$query = "Insert into tborder (userid, usercode, cylinderid, cylinderbrand, quantity, price, paymentmethod, delivery, orderstatus) values ('$userid','$usercode',
                '$cylinderid','$cylinderbrand','$quantity','$price','$paymentmethod','$delivery','Pending' )";
    
$query_run = mysqli_query($connection, $query);

if($query_run)
{       
        header('Location: index_1.php');
} 
else{
    header('Location: ordercode.php');

}
}
?>