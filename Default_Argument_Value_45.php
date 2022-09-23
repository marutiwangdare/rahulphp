<!--
    The following example shows how to use a default parameter. 
    If we call the function setHeight() without arguments it takes the default value as argument:
-->

<?php
function setHeight($minheight=50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80); 
?>