<?php
$servername = 'localhost';
$username ='root';
$password = '';
$dbname = 'gebiwech';

//create connection

$connection = mysqli_connect($servername, $username, $password, $dbname);
if($connection->connect_error){
    die.("Connection Failed");
}

    echo "connection Success";

?>