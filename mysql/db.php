<?php
$connection = mysqli_connect('localhost','root','','loginapp');
if(!$connection){
    die("Database Connection failed"); //die function indicates the DEAD status of the connection
}

?>