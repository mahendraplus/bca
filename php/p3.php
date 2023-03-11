<?php
$y = 1;
while ($x < 10) {
    $z = $x + $y;
    $x = $y;
    $y = $z;
    echo $z . "<br>";
}
?>