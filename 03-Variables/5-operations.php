<?php

// interger
$count = 10;
$size = 2;

var_dump($count + 5);
var_dump($count * $size);

// float
$price = 2.95;
$quantity = 5;

var_dump($price * $quantity);

// String
$message = "Hello";
$name = "Lexa";

echo $message . " " . $name;
echo "<br/>";

// String * integer (Type Conversion or Type Juggling)
$price = "150";
$quantity2 = 3;

$price = $price * $quantity2;

var_dump($price);