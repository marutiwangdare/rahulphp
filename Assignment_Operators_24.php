<!--

PHP Assignment Operators
The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". 
It means that the left operand gets set to the value of the assignment expression on the right.

Assignment	Same as...	Description	Show it
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	s
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus

-->
<?php 
$x = 10;  
echo "value of x: ".$x;

$x = 20;
$x += 10; //short for x=x+10

echo "<br>value of x+=10: ".$x;

$x=30;
$x -= 10; //short for x=x-10

echo "<br>value of x-=10: ".$x;

$x=40;
$x *= 10; //short for x=x*10

echo "<br>value of x*=10: ".$x;

$x=50;
$x /= 10; //short for x=x/10

echo "<br>value of x/=10: ".$x;

$x=60;
$x %= 10; //short for x=x%10

echo "<br>value of x%=10: ".$x;

?>