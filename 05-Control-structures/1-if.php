<?php

// empty function
$articles = [];

var_dump(empty($articles)); // bool(true)

if (empty($articles)) {
  echo "The array is empty";
}

// if else
$articles2 = ["First post", "Another post", "Read this!"];

if (empty($articles2)) {
  echo "The array is empty";
} else {
  echo "The array is not empty";
}

// or

if (empty($articles2))
  echo "The array is empty";
  else 
  echo "The array is not empty";
