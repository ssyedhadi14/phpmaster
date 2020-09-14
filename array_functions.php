<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$list = [356,66,89,977,123,493];

echo min($list); //min displays largest number
echo "<br>"; 
echo max($list);

sort($list);
print_r($list);

?>



</body>
</html>