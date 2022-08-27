<!--

-->
<?php
/*
is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()
*/

$x = 5985;

echo "<br>check 5985 is_int or not<br>";
var_dump(is_int($x));

$x = 59.85;

echo "<br>check 59.85 is_int or not<br>";
var_dump(is_int($x));

$x = 5985;

echo "<br>check 5985 is_integer or not<br>";
var_dump(is_integer($x));

$x = 59.85;

echo "<br>check 59.85 is_integer or not<br>";
var_dump(is_integer($x));

$x = 5985;

echo "<br>check 5985 is_long or not<br>";
var_dump(is_long($x));

$x = 59.85;

echo "<br>check 59.85 is_long or not<br>";
var_dump(is_long($x));


?>