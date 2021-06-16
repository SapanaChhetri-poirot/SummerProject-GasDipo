<?php
    include_once 'database.php';

?>

<?php 
    function check_empty_fields($required_fields_array)
    {
        $form_errors = array();
        foreach ($required_fields_array as $key )
         {
            if ( !isset($_POST[$key]) || $_POST[$key]==NULL)
             { 
                $form_errors[] = $key." is a required field";
             }
         }
         return $form_errors;
    }

    function check_min_length($fields_to_check_length)
    {
        $form_errors = array();
        foreach ($fields_to_check_length as $name_of_the_field => $minimum_length_required	 )
         {
            if (  isset($_POST[$name_of_the_field]) && $_POST[$name_of_the_field] != NULL )
             {
                if ( strlen( trim( $_POST[$name_of_the_field]) ) < $minimum_length_required) 
                {
                    $form_errors[] = $name_of_the_field . " is too short, must be {$minimum_length_required} characters long";
                }
                else{#do nothing}
             }
            return $form_errors;
         }
        }

    }
    function _token(){
        $randomToken = base64_encode(openssl_random_pseudo_bytes(32))."open ssl<br>"; 
        $_SESSION['token'] = $randomToken;        
        return $_SESSION['token'];
    }
    
    function validate_token($requestToken)
    {
        if( isset($_SESSION['token']) && $requestToken === $_SESSION['token'] )
        { 
            unset($_SESSION['token']);
            return true;
        }
        return false; 
    }
    
    function popupMessage($title, $text, $type, $page){
        $message ="<script type='text/javascript'>
                        swal({
                              title: '{$title}',
                              text: '{$text}',
                              timer: 6000,
                              type: '{$type}',
                              showConfirmButton: false
                        });
                              setTimeout(function(){
                                window.location.href='{$page}'; 
                              }, 5000);
                        </script>";
        
            //$message = "$username";
            return $message;
        }

        function flashMessage($message,$color='red'){ //now this will act bydefault if we dont specify the second argument as now we are doing it in that way , now we call it each time , not as previously , only callin once
            if( $color === 'red' ){// means its identical
                    $data = "<div class='alert alert-danger'>{$message}</div>";
            }else{
                    $data = "<div class='alert alert-success'>{$message}</div>";
            }
            return $data;
        }

        

        function show_errors($form_errors_array){
            $no_of_errors = count($form_errors_array);
        
            $errors = "<div class='alert alert-danger'>There "; 
        
            if ($no_of_errors==1) {
                $errors.= "was $no_of_errors error";				// to do the grammer ie    1 error  and  3 errors
            }else{
                $errors.= "were $no_of_errors errors";
            }
            
            foreach ($form_errors_array as $the_error) {
                $errors.= "<li>{$the_error}</li>";
                }
            $errors.="</div>" ;
            return $errors;
        
        }

        function rememberMe($id){ # encrypted so the user id is not visible
            $encryptId = base64_encode("7859739".$id."7359837") ; # making it more secure
            /*this is just to make it more sewcure , adding no , so if it decodes it to then also he will see no. only and not able to know which no is it which will not be possible if we used strings, and the hacker goes into the cookie and decode it by base64_decode */
        
            //setcookie(NAME of the cookie,DATA to be stored in the cookie, TIME for which the cookie should be there, and then deleted,LOACATION
            setcookie('authenticationSystem',$encryptId,time()+60*60*24*100,"/");
        }
        

        

        
    

?>
