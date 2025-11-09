<?php
    // this file just has the database connection information and connects to the database
    $db_username = "juanr"; // use your login name - first name + first letter of last name
    $db_password = "?VqJ2Jgjw3eq!4qv"; // use the database password given by professor
    // database server name -  on your computer, use csc356.com ; on the webhost you can use local host
    $db_servername = "csc356.com";
    // database name
    $db_database_name = "csccom_juanr"; // for this it will be csccom_ <first name + first letter of last name>
    //nuild the database connection string
    $db_conn = mysqli_connect( $db_servername, $db_username, $db_password, $db_database_name);
?>
