<?php

if (isset($_POST['preview_btn'])) {
    $userid =    $_POST['userid'];

    $usercode =    $_POST['usercode'];
    $cylinderbrand =    $_POST['cylinderbrand'];
    $quantity =    $_POST['quantity'];
    $paymentmethod =    $_POST['paymentmethod'];
    $delivery =    $_POST['delivery'];
    //  echo "$usercode, $cylinderbrand, $quantity, $paymentmethod, $delivery ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Preview: Order</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



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
                                            <h1 class="h4 text-gray-900 mb-4">Preview</h1>


                                        </div>

                                        <form class="user" action="ordercode2.php" method="POST">
                                        <div class="form-group">
                                                <label> UserID: <?php echo $userid; ?> </label>
                                                <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label> UserCode: <?php echo $usercode; ?> </label>
                                                <input type="hidden" name="usercode" value="<?php echo $usercode; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label> Cylidnerid: <?php 
                                                
                                                if($cylinderbrand == 'Brand One')
                                                {
                                                    $cylinderid = 1;
                                                }
                                                else if($cylinderbrand == 'Brand Two')
                                                {
                                                    $cylinderid = 2;
                                                }
                                                else if($cylinderbrand == 'Brand Three')
                                                {
                                                    $cylinderid = 3;
                                            }
                                        
                                    
                                                
                                                
                                                
                                                echo $cylinderid; 
                                                
                                                
                                                
                                                ?> </label>
                                                <input type="hidden" name="cylinderid" value="<?php echo $cylinderid; ?>">

                                            </div>


                                            <div class="form-group">
                                                <label> Cylidnerbrand: <?php echo $cylinderbrand; ?> </label>
                                                <input type="hidden" name="cylinderbrand" value="<?php echo $cylinderbrand; ?>">

                                            </div>
                                            <div class="form-group">
                                                <label> Quantity: <?php echo $quantity;  ?> </label>
                                                <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">

                                            </div>

                                            <div class="form-group">
                                                <label> Price: <?php 
                                                
                                                    if($cylinderbrand == 'Brand One')
                                                    {
                                                        $p = 1500;
                                                        $price = $p * $quantity;

                                                    }
                                                    else if($cylinderbrand == 'Brand Two')
                                                    {
                                                        $p=2000;

                                                        $price = $p * $quantity;
                                                    }
                                                    else if($cylinderbrand == 'Brand Three')
                                                    {
                                                        $p = 1000;

                                                        $price = $p * $quantity;
                                                    }
                                                     
                                                    echo $price;
                                                    
                                                

                                                
                                                
                                                
                                                ?> </label>
                                                <input type="hidden" name="price" value="<?php echo $price; ?>">

                                            </div>

                                            <div class="form-group">
                                                <label> Payment Method: <?php echo $paymentmethod; ?> </label>
                                                <input type="hidden" name="paymentmethod" value="<?php echo $paymentmethod; ?>">

                                            </div>
                                            <div class="form-group">
                                                <label> Delivery: <?php echo $delivery;  ?> </label>
                                                <input type="hidden" name="delivery" value="<?php echo $delivery; ?>">

                                            </div>

                                            <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">
                                                Order
                                            </button>

                                            <hr>
                                            <p class="text-center"> <a href="order.php"> Go Back</a>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>




    </div>
</body>

</html>