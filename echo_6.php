<!--
With PHP, there are two basic ways to get output: echo and print.

PHP echo and print Statements
echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions.
echo can take multiple parameters (although such usage is rare) while print can take one argument. 
echo is marginally faster than print.

$PI = 3.15;

$CAL = 10 * $PI;

$CAL = 30 * $PI;
-->

<?php

/*
The PHP echo Statement
The echo statement can be used with or without parentheses: echo or echo().
*/


echo "hi";
echo "<br>";
echo("i am in bracket");
echo "<br>";
echo "<h2>i am in h2 tag!</h2>";
echo "<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "school";
$x = 5;
$y = 4;

echo "<br>";

echo "<h2>" . $txt1 . "</h2>";
echo "<br>";

echo "Study  at " . $txt2 . "<br>";

echo $x + $y;



?>