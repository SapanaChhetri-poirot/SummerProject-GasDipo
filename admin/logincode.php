<?php
//session_start();
include('security.php');

if(isset($_POST['login_btn']))
{
    $username_login = $_POST['username']; 
    $password_login = $_POST['password']; 
    $usertypes = "admin";
    $query = "SELECT * FROM register  ";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run)>0)
    {
      $_SESSION['username'] = $username_login; 
      
       while($row = mysqli_fetch_assoc($query_run))
       {
        
            if($row['username'] === $username_login)
            {
               if($row['password'] === $password_login)
                {
                  // echo $row['id']; 
                  $usertypes = $row['usertype'];

                  $i=2;
                  break;
                }
             }
       } 
    }    
     if($i == 2)
          {
            
            if($usertypes == "user")
           {
               $_SESSION['username'] = $username_login; 
               header('Location: ../userpage.php');
        
           }
           else
           {
               $_SESSION['username'] = $username_login; 
                 header('Location: index.php');
           }
          }
            else
             {
              $_SESSION['status'] = "invalid id or password";
              header('Location: login.php');
            
             }
            
          }
   // $uname = $result['username'];
    //$pwd = $result['password'];
    //if($username_login == $uname)
    
    //{ //   $_SESSION['username'] = $username_login; 
      //header('Location: index.php');

    //}
    //else{
     // $_SESSION['status'] = "invalid";
      //header('Location: login.php');
    //}

    
  


 
 
?>