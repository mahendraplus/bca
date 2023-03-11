<?php
$x = 0;
$y = 0;
$z = 77;
while ($z > 0) {
    $x = $z % 10; 
    $y = $y + $x; 
    $z = $z / 10; 
}
echo $y;
?>

