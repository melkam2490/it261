<?php
echo '<h1>First Example of "a" ergo, it is FALSE, NOT NULL</h2>';
$a = 0;
echo "a is " . is_null($a) . "<br>";
echo '<h1>Second Example of "b", echoing "1" - what does that mean 1= equal to TRUE</h2>';

$b = null;
echo "b is " . is_null($b) . "<br>";
echo '<h1>Thred Example of "c", ergo c is Not NULL</h2>';
$c = "null";
echo "c is " . is_null($c) . "<br>";
echo '<h1>First Example of "d", there for is null</h2>';
$d = NULL;
echo "d is " . is_null($d) . "<br>";
?>
