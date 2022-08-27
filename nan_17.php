<!-- 

PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()
However, the PHP var_dump() function returns the data type and value:
-->

<?php
    //Invalid calculation will return a NaN value:
    $x = acos(8.2);
    var_dump($x);

    echo "<br>check if 200 nan: ".is_nan(200) . "<br>";
    echo "<br> <b>check if acos(1.01) is nan:</b> ".is_nan(acos(1.01));
   

?>