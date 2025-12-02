<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q3</title>
</head>
<body>

<?php

function calculateArea($width, $height) {
    return $width * $height;
}

$rect_width = 4;
$rect_height = 2;

$area = calculateArea($rect_width, $rect_height);
?>

<p>
    <strong style="font-size: 1.5em;">
        The area of a rectangle with a width of <?php echo $rect_width; ?> 
        and a height of <?php echo $rect_height; ?> is <?php echo $area; ?>
    </strong>
</p>

</body>
</html>