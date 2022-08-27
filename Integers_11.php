<!-- 

PHP Integers
2, 256, -256, 10358, -179567 are all integers.

An integer is a number without any decimal part.

An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, 
and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. 
A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float,
 because one of the operands is a float (2.5).

Here are some rules for integers:

An integer must have at least one digit
An integer must NOT have a decimal point
An integer can be either positive or negative

Integers can be specified in three formats: decimal (10-based),
 hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)

decimal system 

1 2 3 4

4 * 1 = 4
3 * 10 = 30
2 * 100 = 200
1 * 1000 = 1000
-->
<?php 

$int = 9223372036854775807;
echo var_dump($int);

/*
Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float,
 because one of the operands is a float (2.5).
*/

$int = 4;
$flt = 2.5;

$ans = $int * $flt;

echo "<br>";

var_dump($ans);

echo "<br>multiplication of 4*2.5 :-".$ans;

$int = 6;
$flt = 32.2;

$ans = $int * $flt;

echo "<br> 6*32.2<br>";
var_dump($ans);




?>