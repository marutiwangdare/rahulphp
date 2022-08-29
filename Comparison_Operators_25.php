<!--

PHP Comparison Operators
The PHP comparison operators are used to compare two values (number or string):


==	Equal	$x == $y	Returns true if $x is equal to $y	

===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type

!=	Not equal	$x != $y	Returns true if $x is not equal to $y	

<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	

!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	

>	Greater than	$x > $y	Returns true if $x is greater than $y	

<	Less than	$x < $y	Returns true if $x is less than $y	

>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	

<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	

<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, 
    depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

-->
<?php 
$x = 100;  
$y = '100'; 

echo "$x  == '$y' ";
var_dump($x == $y); // Returns true if $x is equal to $y	

echo "<br>$x  === '$y' ";
var_dump($x === $y); //returns false because types are not equal

echo "<br>$x  != '$y' ";
var_dump($x != $y); // returns false because values are equal

echo "<br>$x  <> '$y' ";
var_dump($x <> $y); // returns false because values are equal

echo "<br>$x  !== '$y' ";
var_dump($x !== $y); // returns true because types are not equal

$a = 100;
$b = 50;

echo "<br>$a > $b ";
var_dump($a > $b); // returns true because $a is greater than $b

echo "<br>$a < $b ";
var_dump($a < $b); // returns false because $b is less than $a


$c = 50;
$d = 50;

echo "<br>$c >= $d ";
var_dump($c >= $d); // returns true because $c is greater than or equal to $d

echo "<br>$c <= $d ";
var_dump($c <= $d); // returns true because $c is less than or equal to $d


$x = 5;  
$y = 10;

echo "<br>$x <=> $y : ";
echo ($x <=> $y); // returns -1 because $x is less than $y


$x = 10;  
$y = 10;

echo "<br>$x <=> $y : ";
echo ($x <=> $y); // returns 0 because values are equal


$x = 15;  
$y = 10;

echo "<br>$x <=> $y : ";
echo ($x <=> $y); // returns +1 because $x is greater than $y

?>