<?php

$articles = [
  1 => "First post",
  3 => "Another post",
  "Read this!"
];

var_dump($articles);


// Associative arrays
$articles2 = [
  "two" => "First post",
  "four" => "Another post",
  "Read this!"
];

var_dump($articles2);

var_dump($articles2["two"]);
var_dump($articles2["four"]);
var_dump($articles2[0]);