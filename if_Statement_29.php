<!--
    The if statement executes some code if one condition is true.

Syntax
if (condition) {
  code to be executed if condition is true;
}

Example
Output "Have a good day!" if the  (HOUR) is less than 20:
-->
<?php 

$t = 10;

if ($t < 20) {
  echo "Have a good day!";
}

$t = 30;

if ($t < 20) {
  echo "<br>Have a good night!";
}

$con = true;

if ($con) {
  echo "<br>i am true";
}

$con = false;

if ($con) {
  echo "<br>i am false";
}
?>