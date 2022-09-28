<!--
    Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value:
-->
<?php

$age = array("Peter"=>"35", "Ben"=>"371", "Joe"=>"43");



echo "<b>before sort:</b><br>";

foreach($age as $x => $x_value) 
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

asort($age);

echo "<b>after sort:</b><br>";

foreach($age as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>