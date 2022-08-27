<!-- 

PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()

PHP Infinity

A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()

-->
<?php
//Check if the type of a variable is float:

$x = 10.365;
echo "<br>check x is float or not: ".is_float($x);
$p = 10;
echo "<br>check p is float or not: ".is_float($p);

$y = 1.9e411;

echo "<br> check y finite or infinite: ";
var_dump($y);





echo "<br> check y finite or not :".is_finite($y);
echo "<br> check x finite or not :".is_finite($x);

echo "<br> check y is_infinite or not :".is_infinite($y);
echo "<br> check x is_infinite or not :".is_infinite($x);


