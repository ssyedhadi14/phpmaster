

<?php

if(isset($_POST['submit'])){ //super global variable $_POST is used 
 
$name = array("Jack", "Jason", "James");

$minimum = 5;
$maximum = 10;

$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username) < $minimum) {

    echo "Username has to be longer than 5 Characters <br>";

}
if(strlen($username) > $maximum) {

    echo "Username cannot be longer than 10 Characters <br>";

}
 
if(!in_array($username, $name)){

echo "Sorry you are not allowed to Login <br>";

}

else{
    echo "Welcome to the new World! <br>";
}

}

?>