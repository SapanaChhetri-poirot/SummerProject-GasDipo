<?php
    include ('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usercode = $_POST['usercode'];
    $usertype = $_POST['usertype'];
    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        { 
            $query = "INSERT INTO register (username,email,password, usertype,usercode) VALUES ('$username','$email','$password','$usertype','$usercode')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}

//edit 

if(isset($_POST['edit_btn']))
{
    $username = $_POST['edit_username'];

    $query = "SELECT * from register where username='$username'";
    $query_run = mysqli_query($connection, $query);
}



//for register update for amdin

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $usercode = $_POST['edit_usercode'];

    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE register SET username='$username',
     email='$email', password='$password', usertype='$usertypeupdate', usercode='$usercode' where id='$id'";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
            $_SESSION['success'] = "Your Data is updated";
            header('Location: register.php');
    }
    else{
        $_SESSION['status'] = "Your Data is NOT updated";
        header('Location: register.php');

    }

}


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE from register where id='$id' ";
    $query_run = mysqli_query($connection, $query);
        if($query_run)
        {

            $_SESSION['success'] = "Your Data is deleted";
            header('Location: register.php');
    }
        else
        {  $_SESSION['status'] = "Your Data is NOT deleted";
            header('Location: register.php');
    }}



    if(isset($_POST['about_save']))
    {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $links = $_POST['links'];

        $query ="INSERT INTO aboutus (title, subtitle, description, links) VALUES('$title','$subtitle','$description','$links')";
        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
           
            $_SESSION['success'] = "About Us Added";
            header('Location: aboutus.php');
        }
        else
        {
            $_SESSION['status'] = "About Us Not Added";
            header('Location: aboutus.php');
        
        }
    }
    

    if(isset($_POST['update_btn']))
    {
        $id = $_POST['edit_id'];
        $title = $_POST['edit_title'];
        $subtitle = $_POST['edit_subtitle'];
        $description = $_POST['edit_description'];
        $links = $_POST['edit_links'];

        $query = "UPDATE aboutus SET title='$title', subtitle='$subtitle', description='$description', links='$links' WHERE id='$id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            $_SESSION['success'] = "Your Data is updated";
            header('Location: aboutus.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT updated";
            header('Location: aboutus.php');
        
        }
    }








    if(isset($_POST['about_delete_btn']))
    {
        $id = $_POST['delete_id'];
       
        $query = "DELETE FROM aboutus WHERE id='$id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            $_SESSION['success'] = "Your Data is deleted";
            header('Location: aboutus.php');
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT deleted";
            header('Location: aboutus.php');
        
        }
    }


    



//user data



if(isset($_POST['registerbtnofuser']))
{
    $userid = $_POST['userid'];
    $usercode = $_POST['usercode'];
    $username = $_POST['username'];

    $usercode_query = "SELECT * FROM tbuser WHERE usercode='$usercode' ";
    $usercode_query_run = mysqli_query($connection, $usercode_query);
    if(mysqli_num_rows($usercode_query_run) > 0)
    {
        $_SESSION['status'] = "Usercode Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: users.php');  
    }
    else
    {
        {
            $query = "INSERT INTO tbuser (id,usercode,username) VALUES ('$userid','$usercode','$username')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "User Data Added";
                $_SESSION['status_code'] = "success";
                header('Location: users.php');
            }
            else 
            {
                $_SESSION['status'] = "User Data Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: users.php');  
            }
        }
       
    }

}

if(isset($_POST['delete_btnofuser']))
{
    $usercode =  $_POST['delete_usercode'];

    $query = "DELETE from tbuser where usercode='$usercode' ";
    $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
    
            $_SESSION['success'] = 'Your Data is Deleted.';
            header('Location: users.php');
    }
        else
        {  $_SESSION['status'] = "Your Data is NOT deleted";
            header('Location: users.php');
    }
}



    if(isset($_POST['updatebtnofuser']))
    {
        $id =  $_POST['edit_userid'];
        $usercode = $_POST['edit_usercode'];
        $username= $_POST['edit_username'];
    
        $query = "UPDATE tbuser SET id='$id', usercode='$usercode', username='$username' where usercode='$usercode'";
    
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
                $_SESSION['success'] = "Your Data is updated";
                header('Location: users.php');
        } 
        else{
            $_SESSION['status'] = "Your Data is NOT updated";
            header('Location: users.php');
    
        }
    
    }




    //register button of cyinder
    if(isset($_POST['registerbtnofcylinder']))
{
    $id = $_POST['cylinderid'];
    $name = $_POST['cylindername'];
    $price = $_POST['cylinderprice'];
    $description = $_POST['cylinderdescription'];

    $id_query = "SELECT * FROM cylinder WHERE id='$id' ";
    $id_query_run = mysqli_query($connection, $id_query);
    if(mysqli_num_rows($id_query_run) > 0)
    {
        $_SESSION['status'] = "Id Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: cylinder.php');  
    }
    else
    {
         
            $query = "INSERT INTO cylinder (id, name, price, description) VALUES ('$id','$name','$price','$description')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Cylinder Data Added";
                $_SESSION['status_code'] = "success";
                header('Location: cylinder.php');
            }
            else 
            {
                $_SESSION['status'] = "Cylinder Data Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: cylinder.php');  
            }
        }
       
    }


//update button of cylinder
    if(isset($_POST['updatebtnofcylinder']))
    {
        $id = $_POST['edit_id'];
        $name = $_POST['edit_name'];
        $price = $_POST['edit_price'];
        $description = $_POST['edit_description'];
        
        $query = "UPDATE cylinder SET id='$id', name='$name', price='$price', description='$description' where id='$id'";
    
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
                $_SESSION['success'] = "Your Data is updated";
                header('Location: cylinder.php');
        }
        else{
            $_SESSION['status'] = "Your Data is NOT updated";
            header('Location: cylinder.php');
    
        }
    
    }
    
    
    if(isset($_POST['updatebtnoforder']))
    {
        $orderid =  $_POST['edit_orderid'];
        $orderstatus = $_POST['edit_orderstatus'];
    
        $query = "UPDATE tborder SET orderstatus='$orderstatus' where orderid='$orderid'";
    
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
                $_SESSION['success'] = "Your Data is updated";
                header('Location: orders.php');
        } 
        else{
            $_SESSION['status'] = "Your Data is NOT updated";
            header('Location: orders.php');
    
        }
    
    }

    if(isset($_POST['updatebtnofrequest']))
    {
        $id =  $_POST['edit_requestid'];
        $requeststatus = $_POST['edit_requeststatus'];
    
        $query = "UPDATE signuprequests SET requeststatus='$requeststatus' where id='$id'";
    
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
                $_SESSION['success'] = "Your Data is updated";
                header('Location: signuprequest.php');
        } 
        else{
            $_SESSION['status'] = "Your Data is NOT updated";
            header('Location: signuprequest.php');
    
        }
    
    }



    if(isset($_POST['updatebtnoffeedback']))
    {
        $id =  $_POST['edit_id'];
        $checked = $_POST['edit_checked'];
    
        $query = "UPDATE feedback SET checked='$checked' where id='$id'";
    
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
                $_SESSION['success'] = "Your Data is updated";
                header('Location: feedback.php');
        } 
        else{
            $_SESSION['status'] = "Your Data is NOT updated";
            header('Location: feedback.php');
    
        }
    
    }

    if(isset($_POST['registerbtnofpayment']))
    {
        $orderid = $_POST['orderid'];
        
        $usercode_query = "SELECT * FROM payment WHERE orderid='$orderid' ";
        $usercode_query_run = mysqli_query($connection, $usercode_query);
        if(mysqli_num_rows($usercode_query_run) > 0)
        {
            $_SESSION['status'] = "Orderid Already Taken. Please Try Another one.";
            $_SESSION['status_code'] = "error";
            header('Location: payment.php');  
        }
        else
        {
            {
                $query = "SELECT * FROM tborder WHERE orderid='$orderid' ";
                $query_run = mysqli_query($connection, $query);
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    { 
                                        $a =  $row['orderid'];
                 $b =  $row['userid'];
                 $c =  $row['cylinderid'];
                 $d =  $row['price'];
                 $e =  $row['paymentmethod'];
                $f = $row['usercode'];

                $query1 = "INSERT INTO payment (orderid, userid, cylinderid, price, paymentmethod, status, remarks,usercode) values('$a','$b','$c','$d','$e','add','add','$f')";
                $query_run1 = mysqli_query($connection, $query1);

                if($query_run1)
                {
                    // echo "Saved";
                    $_SESSION['status'] = "Payment Data Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: payment.php');
                }
                else 
                {
                    $_SESSION['status'] = "Payment Data Not Added";
                    $_SESSION['status_code'] = "error";
                    header('Location: payment.php');  
                }
                    }
                     }
                     else
                     {
                        $_SESSION['status'] = "The order id doesnot exist.";
                        $_SESSION['status_code'] = "error";
                        header('Location: payment.php');  
                     
                     }
    }
           
        }
    
    }
    


    if(isset($_POST['updatebtnofpayment']))
    {
        $paymentid = $_POST['edit_paymentid'];
       
        $status = $_POST['edit_status'];
        $remarks = $_POST['edit_remarks'];

    
        $query = "UPDATE payment SET status='$status', remarks='$remarks' where paymentid='$paymentid'";
    
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
                $_SESSION['success'] = "Your Data is updated";
                header('Location: payment.php');
        }
        else{
            $_SESSION['status'] = "Your Data is NOT updated";
            header('Location: payment.php');
    
        }
    
    }
    

 //register button of employee
 if(isset($_POST['registerbtnofemployee']))
 {
     $id = $_POST['id'];
     $name = $_POST['name'];
     $address = $_POST['address'];
     $dob = $_POST['dob'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $post = $_POST['post'];
     $salary = $_POST['salary'];
     $joineddate = $_POST['joineddate'];
     $status = $_POST['status'];

     $id_query = "SELECT * FROM employee WHERE id='$id' ";
     $id_query_run = mysqli_query($connection, $id_query);
     if(mysqli_num_rows($id_query_run) > 0)
     {
        $_SESSION['status'] = "Id Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
       header('Location: employees.php');  
     }
     else
     {
          
             $query = "INSERT INTO employee (id, name, address, dob, email, phone, post, salary, joineddate, status) 
             VALUES('$id','$name','$address', '$dob','$email','$phone','$post','$salary','$joineddate','$status')";
             $query_run = mysqli_query($connection, $query);
             
             if($query_run)
             {
                 // echo "Saved";
                 $_SESSION['status'] = "Employee Data Added";
                 $_SESSION['status_code'] = "success";
                 header('Location: employees.php');
             }
             else 
             {
                 $_SESSION['status'] = "Employee Data Not Added";
                 $_SESSION['status_code'] = "error";
                 header('Location: employees.php');  
             }
         }
        
     }
 
 
 //update button of employee
     if(isset($_POST['updatebtnofemployee']))
     {
         $id = $_POST['edit_id'];
         $name = $_POST['edit_name'];
         $address = $_POST['edit_address'];
         $dob = $_POST['edit_dob'];
         $email = $_POST['edit_email'];
         $phone = $_POST['edit_phone'];
         $post = $_POST['edit_post'];
         $salary = $_POST['edit_salary'];
         $joineddate = $_POST['edit_joineddate'];
         $status = $_POST['edit_status'];

         $query = "UPDATE employee SET id='$id', name='$name', address='$address', dob='$dob', email='$email', phone='$phone', post='$post', 
         salary='$salary', joineddate='$joineddate', status='$status'  where id='$id'";
     
         $query_run = mysqli_query($connection, $query);
     
         if($query_run)
         {
                 $_SESSION['success'] = "Your Data is updated";
                 header('Location: employees.php');
         }
         else{
             $_SESSION['status'] = "Your Data is NOT updated";
             header('Location: employees.php');
     
         }
     
     }
    


     if(isset($_POST['delete_btnofemployee']))
     {
         $id =  $_POST['delete_id'];
     
         $query = "DELETE from employee where id='$id' ";
         $query_run = mysqli_query($connection, $query);
             if($query_run)
             {
         
                 $_SESSION['success'] = 'Your Data is Deleted.';
                 header('Location: employees.php');
         }
             else
             {  $_SESSION['status'] = "Your Data is NOT deleted";
                 header('Location: employees.php');
         }
     }
    
     




     //register button of vendor
 if(isset($_POST['registerbtnofvendor']))
 {
     $id = $_POST['vendorid'];
     $name = $_POST['companyname'];
     $address = $_POST['address'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $cylinderid = $_POST['cylinderid'];
     $priceofcylinder = $_POST['priceofcylinder'];
     $status = $_POST['status'];

     $id_query = "SELECT * FROM vendor WHERE id='$id' ";
     $id_query_run = mysqli_query($connection, $id_query);
     if(mysqli_num_rows($id_query_run) > 0)
     {
         $_SESSION['status'] = "Id Already Taken. Please Try Another one.";
         $_SESSION['status_code'] = "error";
         header('Location: vendors.php');  
     }
     else
     {
          
             $query = "INSERT INTO vendor (id, companyname, address, email, phone, cylinderid, priceofcylinder, status) 
             VALUES ('$id','$name','$address','$email','$phone','$cylinderid','$priceofcylinder','$status')";
             $query_run = mysqli_query($connection, $query);
             
             if($query_run)
             {
                 // echo "Saved";
                 $_SESSION['status'] = "Vendor Data Added";
                 $_SESSION['status_code'] = "success";
                 header('Location: vendors.php');
             }
             else 
             {
                 $_SESSION['status'] = "Vendor Data Not Added";
                 $_SESSION['status_code'] = "error";
                 header('Location: vendors.php');  
             }
         }
        
     }
 
 
 //update button of Vendor
     if(isset($_POST['updatebtnofvendor']))
     {
         $id = $_POST['edit_vendorid'];
         $name = $_POST['edit_companyname'];
         $address = $_POST['edit_address'];
         $email = $_POST['edit_email'];
         $phone = $_POST['edit_phone'];
         $cylinderid = $_POST['edit_cylinderid'];
         $priceofcylinder = $_POST['edit_priceofcylinder'];
         $status = $_POST['edit_status'];

         $query = "UPDATE vendor SET id='$id', companyname='$name', address='$address', email='$email', phone='$phone',  
         cylinderid='$cylinderid', priceofcylinder='$priceofcylinder', status='$status'  where id='$id'";
     
         $query_run = mysqli_query($connection, $query);
     
         if($query_run)
         {
                 $_SESSION['success'] = "Your Data is updated";
                 header('Location: vendors.php');
         }
         else{
             $_SESSION['status'] = "Your Data is NOT updated";
             header('Location: vendors.php');
     
         }
     
     }
    


     if(isset($_POST['delete_btnofvendor']))
     {
         $id =  $_POST['delete_id'];
     
         $query = "DELETE from vendor where id='$id' ";
         $query_run = mysqli_query($connection, $query);
             if($query_run)
             {
         
                 $_SESSION['success'] = 'Your Data is Deleted.';
                 header('Location: vendors.php');
         }
             else
             {  $_SESSION['status'] = "Your Data is NOT deleted";
                 header('Location: vendors.php');
         }
     }














      //register button of cylinderstock
 if(isset($_POST['registerbtnofcylinderstock']))
 {
    $stockid = $_POST['stockid'];
    $cylinderid = $_POST['cylinderid'];

     $vendorid = $_POST['vendorid'];
     $cylinderquantity = $_POST['cylinderquantity'];

     $note = $_POST['note'];

     $id_query = "SELECT * FROM cylinderstock WHERE stockid='$stockid' ";
     $id_query_run = mysqli_query($connection, $id_query);
     if(mysqli_num_rows($id_query_run) > 0)
     {
         $_SESSION['status'] = "Id Already Taken. Please Try Another one.";
         $_SESSION['status_code'] = "error";
         header('Location: cylinderstock.php');  
     }
     else
     {
          
             $query = "INSERT INTO cylinderstock (stockid, cylinderid, vendorid, cylinderquantity, note) 
             VALUES ('$stockid','$cylinderid','$vendorid','$cylinderquantity','$note')";
             $query_run = mysqli_query($connection, $query);
             
             if($query_run)
             {
                 // echo "Saved";
                 $_SESSION['status'] = "Stock Data Added";
                 $_SESSION['status_code'] = "success";
                 header('Location: cylinderstock.php');
             }
             else 
             {
                 $_SESSION['status'] = "Stock Data Not Added";
                 $_SESSION['status_code'] = "error";
                 header('Location: cylinderstock.php');  
             }
         }
        
     }
 
 
 //update button of Cylinderstock
     if(isset($_POST['updatebtnofcylinderstock']))
     {

         $stockid = $_POST['edit_stockid'];
         $cylinderid = $_POST['edit_cylinderid'];
         $vendorid = $_POST['edit_vendorid'];
         $cylinderquantity = $_POST['edit_CylinderQuantity'];
         $note = $_POST['edit_note'];

         
         $query = "UPDATE cylinderstock SET stockid='$stockid', cylinderid='$cylinderid', vendorid='$vendorid', 
         cylinderquantity='$cylinderquantity',
         note='$note' where stockid='$stockid'";
     
         $query_run = mysqli_query($connection, $query);
     
         if($query_run)
         {
                 $_SESSION['success'] = "Your Data is updated";
                 header('Location: cylinderstock.php');
         }
         else{
             $_SESSION['status'] = "Your Data is NOT updated";
             header('Location: cylinderstock.php');
     
         }
     
     }
    


     if(isset($_POST['delete_btnofcylinderstock']))
     {
         $id =  $_POST['delete_id'];
     
         $query = "DELETE from cylinderstock where vendorid='$id' ";
         $query_run = mysqli_query($connection, $query);
             if($query_run)
             {
         
                 $_SESSION['success'] = 'Your Data is Deleted.';
                 header('Location: cylinderstock.php');
         }
             else
             {  $_SESSION['status'] = "Your Data is NOT deleted";
                 header('Location: cylinderstock.php');
         }
     }
