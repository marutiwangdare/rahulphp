<!-- 
PHP Numerical Strings

The PHP is_numeric() function can be used to find whether a variable is numeric.
 The function returns true if the variable is a number or a numeric string, false otherwise.
-->

<?php
echo '<br> 5985: ';
$x = 5985;
var_dump(is_numeric($x));

echo '<br> "5985": ';
$x = "5985";
var_dump(is_numeric($x));

echo '<br> "59.85": ';
$x = "59.85";
var_dump(is_numeric($x));

echo '<br> "Hello": ';
$x = "Hello";
var_dump(is_numeric($x));

echo '<br> "123R": ';
$x = "123R";
var_dump(is_numeric($x));

$num1="100";
$num2=100;
echo "<br>addition of num1 and num2 is : ".$num1+$num2;
?>