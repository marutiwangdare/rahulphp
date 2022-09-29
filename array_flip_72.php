<!--
    Definition and Usage
The array_flip() function flips/exchanges all keys with their associated values in an array.
-->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$result = array_flip($a1);

print_r($result);
?>