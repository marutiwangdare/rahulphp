<?php declare(strict_types=1); // strict requirement


function addNumbers(float $a, float $b) : int {

  $sum = $a + $b;  // sum is of type float
  $result = (int) $sum; // convert sum type from float to integer

  //return $sum; // show error because sum type is float and return type is int
  return $result;
}


$result = addNumbers(1.2, 5.2);

var_dump($result);



?>