<?php include "db.php"; ?>
<?php
// <!-- User defined functions! -->

function showAlldata(){
    global $connection;


    $username = $_POST['username'];
    $password = $_POST['password'];

    //Sanitizing and cleaning the data

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$hashFormat = "$2y$10$"; // Hash Documentation - BlowFish.

$salt = "iusesomecrazystrings22"; // 22 character string

$hashF_and_salt = $hashFormat . $salt;

$password = crypt($password, $hashF_and_salt);


$query = "INSERT INTO users(username, password)";
$query .= "VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if(!$result){
    die('Query did not execute!!!' . mysqli_error());
}

while($row = mysqli_fetch_assoc($result)){
    
    $id = $row['id'];
    
       echo  "<option value='$id'>$id</option>";
    }

}
?>