<?php
// Define the color array
$color = array('white', 'green', 'red', 'blue', 'black');

// Define the string template with placeholders for the colors
$string = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {color1} carpet, the {color2} lawn, the {color3} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

// Replace placeholders with corresponding colors from the array
$string = str_replace(
    ['{color1}', '{color2}', '{color3}'],
    [$color[2], $color[1], $color[0]], // Red, Green, White
    $string
);

// Display the resulting string
echo $string;
?>

