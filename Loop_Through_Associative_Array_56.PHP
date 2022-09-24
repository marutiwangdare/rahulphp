<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43", "Rahul"=>"25");

foreach($age as $x_key => $x_value) {

  echo "Key=" . $x_key . ", Value=" . $x_value;
  echo "<br>";

}
/*
times
1
2
3

x_key   x_value
Peter   35
Ben     37
Joe     43

Key=Peter, Value=35
Key=Ben, Value=37
Key=Joe, Value=43


*/
?>