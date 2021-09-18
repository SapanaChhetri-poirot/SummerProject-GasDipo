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
$date = date('Y-m-d H:i:s');

$connection = mysqli_connect("localhost","root","","db_gasdipo");
$query = "Insert into tborder (userid, usercode, cylinderid, cylinderbrand, quantity, price, paymentmethod, delivery, orderstatus, orderdate) values ('$userid','$usercode',
                '$cylinderid','$cylinderbrand','$quantity','$price','$paymentmethod','$delivery','Pending', '$date' )";
    

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