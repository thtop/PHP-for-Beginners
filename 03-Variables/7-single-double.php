<?php

$message = 'Hello';
$name = "Dave";

// $start = '3 o'clock';

$start1 = '3 o\'clock';
$start2 = "3 o'clock";

var_dump($start1);
var_dump($start2);

// Escaped characters

$days = "Monday\nTuesday\nWednesday";

echo $days;


echo "Hello " . $name;

// Variable Interpolation
echo "Hello $name"; 
echo "Hello {$name}";