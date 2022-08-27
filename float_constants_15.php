<!--

PHP has the following predefined constants for floats (from PHP 7.2):

PHP_FLOAT_MAX - The largest representable floating point number
PHP_FLOAT_MIN - The smallest representable positive floating point number
 PHP_FLOAT_MAX - The smallest representable negative floating point number

PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

-->

<?php 

echo "PHP_FLOAT_MAX: ".PHP_FLOAT_MAX;
echo "<br>PHP_FLOAT_MIN: ".PHP_FLOAT_MIN;
echo "<br>PHP_FLOAT_DIG: ".PHP_FLOAT_DIG;


?>