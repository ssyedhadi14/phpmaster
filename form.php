
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action = "form_process.php" method = "post">

<input type = "text" name = "username" placeholder= "Enter Username">
<input type = "password" name = "password" placeholder= "Enter Password" value= "<?php  echo "Heyeyey";   ?>"> <br>
<input type = "submit" name = "submit">

</form>


</body>
</html>