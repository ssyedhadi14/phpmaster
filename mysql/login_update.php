<?php include "db.php";?>
<?php include "functions.php";?>

<!-- // CREATE, READ, UPDATE, DELETE => CRUD!
//Connecting the form to the DataBase!
//Syntax is Variable = mysqli_connect('server','username','password','database')
// QUERY is important to pull Information! -->

<?php
if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username ='$username' "; 
    $query .= "password ='$password' "; 
    $query .= "WHERE id = $id "; 

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ADDED BOOTSTRAP SCRIPT -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <!-- SC -> div.container -->

        <div class="col-sm-8">
            <!-- div.class-col-xs-6 -->

<form action="login.php" method="post">

<div class="form-group">
    <!-- // div.form-group -->
    <label for="username">
    <bold> Username </bold>
    </label>
    <input type="text" name="username" class="form-control"> <!-- input.form-control -->
</div>

<div class="form-group">
    <label for="password">
    <bold>Password </bold>
    </label>
    <input type="password" name="password" class="form-control">
</div>

<div class="form-group">
<select name="id" id="">

<?php

 showAlldata();

?>

</select>

<input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

</form>


    </div>
    </div>
   </body>
</html>