<?php

if(isset($_POST['submit'])) // to receive data from form
{ 

$username = $_POST['username'];
$password = $_POST['password'];

//Connecting the form to the DataBase!
//Syntax is Variable = mysqli_connect('server','username','password','database')
$connection = mysqli_connect('localhost','root','','loginapp');

if($connection){
    echo "We are connected successfully!!";
}else{
    die("Database Connection failed"); //die function indicates the DEAD status of the connection
}
}  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ADDED BOOTSTRAP SCRIPT -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>

        </div>
    </div>


</body>

</html>