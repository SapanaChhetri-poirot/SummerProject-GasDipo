<?php 
    include_once 'partials/headers.php';

    echo showProperl("jfslkj", "snfans", "sklsfjksjksjk", "12:42:23");

   function showProperl($sender_name, $sender_email, $message, $send_date)
    {
        $result = "<div class='container'>
                        <section class-'col col-lg-7'>

                            <div class='alert alert-success'>
                                
                            <span>
                                    <b> ($sender_name) </b>
                                </span>
                            <span>
                                    <b> ($send_date) </b>
                                </span>
                                
                            </div>


                            
                            <div class='alert alert-success'>
                                
                            <span>
                                    <b> {} </b>
                                </span>
                            <span>
                                    <b> ($message) </b>
                                </span>
                                
                            </div>
                        </section>
                    </div>
                ";
            return $result;  }
?>

<?php 
    echo '</br> </br> </br>';
    include_once 'resource/session.php';
    include_once 'resource/database.php';
    include_once 'resource/utilities.php';

    //$sqlQuery = "SELECT ";

?>