<?php

// CREATE, READ, UPDATE, DELETE => CRUD!

//Connecting the form to the DataBase!
//Syntax is Variable = mysqli_connect('server','username','password','database')

$connection = mysqli_connect('localhost','root','','loginapp');
if($connection){
    echo "We are connected successfully!!";
}
else{
    die("Database Connection failed"); //die function indicates the DEAD status of the connection
}

$query = "SELECT * FROM users"; //table columns
$result = mysqli_query($connection, $query);

if(!$result){
    die('Query did not execute!!!' . mysqli_error());
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

<?php

while($row = mysqli_fetch_assoc($result)){
?>
<pre>
<?php
print_r($row);
?>
</pre>
<?php

}
?>


    </div>
    </div>
   </body>
</html>