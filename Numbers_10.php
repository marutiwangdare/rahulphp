<!-- 

PHP Numbers
One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. 

Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.

-->
<?php 

$str = "rahul kumar";

echo "<br>data type of str<br>";
var_dump($str);

$int = 10;
echo "<br>data type of int<br>";
var_dump($int);

$flt = 10.22;
echo "<br>data type of flt<br>";
var_dump($flt);

$chr = 'c';
echo "<br>data type of chr<br>";
var_dump($chr);

$auto = "str";
$auto = 10;
$auto = 10.22;
$auto = 'c';

echo "<br>data type of auto<br>";
var_dump($auto);

?>