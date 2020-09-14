<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$x = "outside"; //global scope (when declared outside the function)

function convert(){
global $x;

$x = "inside"; // local scope (when declared inside)

}

echo $x;
echo "<br>";

convert();
echo $x;

?>




</body>
</html>