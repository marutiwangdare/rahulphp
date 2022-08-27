<!-- 

PHP is a Loosely Typed Language

In the example below, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value.
Since the data types are not set in a strict sense,
you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function,
 and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

-->
<?php

$x = 5;
$y = 4;
echo $x + $y;

echo "<br>";

$txt = "this is text";
$num = 10;

// echo $txt+$num;  //not allowed both must be numbers


?>