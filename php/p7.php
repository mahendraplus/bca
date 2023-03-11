<?php
$car = array("volvo", "BMW", "Maruti");
echo count($car);
echo "<hr>";
//----------------------------------------------------------------
$people = array(
    "jiyan",
    "riya",
    "arohi", "sagar");
if (in_array("sagar", $people)) {
    echo "match found";
} else {
    echo "match not found";
}
echo "<hr>";
//----------------------------------------------------------------
$my_array = array("a dog", "a cat", "a horse");
list($a, $b, $c) = $my_array;
echo "i have several animals, $a $b and $c";
echo "<hr>";
//----------------------------------------------------------------
$car = array("volvo", "BMW", "Maruti");
sort($car);
print_r($car);
echo "<hr>";
//----------------------------------------------------------------
$car = array("BMW", "volvo", "Maruti");
print_r(array_reverse($car));
echo "<hr>";
//----------------------------------------------------------------
$a1 = array("red", "green");
$b1 = array("blue", "yellow");
print_r(array_merge($a1, $b1));
echo "<hr>";
//--
$fruit = array("apple", "orange", "graps");
array_push($fruit, "banana");
print_r($fruit);
echo "<hr>";
//--
$fruit = array("apple", "orange", "graps");
array_pop($fruit);
print_r($fruit);
?>