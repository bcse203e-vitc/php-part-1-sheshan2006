<?php
$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$avg = array_sum($temp)/count($temp);
echo "Average Temperature is : ".round($avg,1)."<br>";

sort($temp);
echo "List of seven lowest temperatures : ";
echo implode(", ", array_slice($temp, 0, 7))."<br>";

echo "List of seven highest temperatures : ";
echo implode(", ", array_slice($temp, -7));
?>

