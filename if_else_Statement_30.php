<!--
    The if...else statement executes some code if a condition is true and another code if that condition is false.

Syntax
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}
-->
<?php 
$t = 10;

if ($t < 20) {
  echo "<br>1 Have a good day!";
} else {
  echo "<br>1 Have a good night!";
}


if ($t > 20) {
  echo "<br>2 Have a good day!";
} else {
  echo "<br>2 Have a good night!";
}
?>