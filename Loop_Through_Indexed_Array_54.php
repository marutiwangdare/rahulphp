<?php
$cars = array("Volvo", "BMW", "Toyota");

$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {

  echo $cars[$x];
  echo "<br>";

}
/*
x   arrlength
0   3
1
2
3


Volvo
BMW
Toyota


*/
?>