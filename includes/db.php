<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "zimcourier";

    
//remote server connection
// $db_host = "remotemysql.com";
// $db_user = "mLI3W7hJM0";
// $db_pass = "JMwOuX6zUM";
// $db_name = "mLI3W7hJM0";

    $connection = mysqli_connect($db_host, $db_user, $db_pass , $db_name);

    if (!$connection){
        die("couldn't connect to database" .mysqli_error($connection));
    }
