<!--
    The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, 
    such as addition, subtraction, multiplication etc.

+	Addition	$x + $y	Sum of $x and $y	

-	Subtraction	$x - $y	Difference of $x and $y	

*	Multiplication	$x * $y	Product of $x and $y	

/	Division	$x / $y	Quotient of $x and $y	

%	Modulus	$x % $y	Remainder of $x divided by $y	

**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power
--->

<?php
$x = 10;  
$y = 2;

echo "addition = ".$x + $y;
echo "<br> Subtraction =".$x - $y;
echo "<br> Multiplication =".$x * $y;
echo "<br> Division =".$x / $y;
echo "<br> Modulus =".$x % $y;
echo "<br> Exponentiation =".$x ** $y;
?>