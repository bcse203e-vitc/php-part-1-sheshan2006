<?php
$original = array('1','2','3','4','5');
echo "Original array : ".implode("", $original)."<br>";
array_splice($original, 3, 0, '$');
echo "After inserting '\$' the array is : ".implode("", $original);
?>

