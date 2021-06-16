<?php  
    $dsn = 'mysql: host = localhost';
    $username = 'root';
    $password='';

    $host = 'localhost';
    $dbname = 'db_gasdipo';


    try{
        $db= new PDO($dsn, $username, $password);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'hi, connection has been set';
    }
    catch (PDOException $ex)
    {
        echo 'connection failed <br />'.$ex->getMessage();
    }

?>