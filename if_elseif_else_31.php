<!--

PHP - The if...elseif...else Statement
The if...elseif...else statement executes different codes for more than two conditions.

Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}

< - less than
> - greater than
-->
<?php 
$t = 1;
//$t = 11;
//$t = 21;

if ($t < 10) 
{
  echo "Have a good morning!";
} 
elseif ($t < 20) 
{
  echo "Have a good day!";
} 
else 
{
  echo "Have a good night!";
}

?>