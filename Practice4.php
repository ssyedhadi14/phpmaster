<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers
	Step 2: Make a function that passes parameters and call it using parameter values
 */
function calculation(){
	$num1 = 20;
	$num2 = 40;

	$sum = $num1 + $num2;
	return $sum;
}
$theSum = calculation();
echo $theSum . "<br>";
    

function hola($hello){

    echo $hello;

}
hola('Hey is that Spanish?');
?>

</body>
</html>