<?php
    include ('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $usertype = $_POST['usertype'];
    $connection = mysqli_connect("localhost","root","","db_gasdipo");
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
            $query = "INSERT INTO register (username,email,password, usertype) VALUES ('$username','$email','$password','$usertype')";
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
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];

    $connection = mysqli_connect("localhost","root","","db_gasdipo");

    $query = "UPDATE register SET username='$username', email='$email', password='$password', usertype='$usertypeupdate' where id='$id'";

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
    $connection = mysqli_connect("localhost","root","","db_gasdipo");

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

        $connection = mysqli_connect("localhost","root","","db_gasdipo");
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

        $connection = mysqli_connect("localhost","root","","db_gasdipo");
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
       
        $connection = mysqli_connect("localhost","root","","db_gasdipo");
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

    $connection = mysqli_connect("localhost","root","","db_gasdipo");
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
    $connection = mysqli_connect("localhost","root","","db_gasdipo");

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
        $connection = mysqli_connect("localhost","root","","db_gasdipo");
    
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

    $connection = mysqli_connect("localhost","root","","db_gasdipo");
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
    
        $connection = mysqli_connect("localhost","root","","db_gasdipo");
    
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
        $connection = mysqli_connect("localhost","root","","db_gasdipo");
    
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
        $connection = mysqli_connect("localhost","root","","db_gasdipo");
    
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




?>
