<!--

The PHP increment operators are used to increment a variable's value.

The PHP decrement operators are used to decrement a variable's value.


++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one

--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one

-->
<?php 
$x = 10;  
echo "<br> ++10 : ". ++$x;

$y = 10;
echo "<br> 10++ : ". $y++;

echo "<br>".$y;
?>