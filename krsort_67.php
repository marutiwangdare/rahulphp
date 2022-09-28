<!--
    Sort Array (Descending Order), According to Key - krsort()
The following example sorts an associative array in descending order, according to the key:
-->

<?php
$age = array("Peter"=>"35", "Ben"=>"371", "Joe"=>"43");


echo "<b>before sort:</b><br>";

foreach($age as $x => $x_value) 
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

krsort($age);

echo "<b>after sort:</b><br>";

foreach($age as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>