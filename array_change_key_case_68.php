<!--
    PHP array_change_key_case() Function
-->
<?php

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");


echo "<b>befor case change</b><br>";
var_dump($age);


$result = array_change_key_case($age,CASE_UPPER);


echo "<br><b>after upper case change</b><br>";
var_dump($result);


$result = array_change_key_case($age,CASE_LOWER );


echo "<br><b>after lower case change</b><br>";
var_dump($result);


?>