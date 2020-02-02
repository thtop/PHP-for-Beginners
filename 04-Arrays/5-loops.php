<?php

$articles = [
  "First post",
  "Another post",
  "Read this!"
];

var_dump($articles[0]);
var_dump($articles[1]);
var_dump($articles[2]);

echo $articles[0];
echo $articles[1];
echo $articles[2];

// foreach loop

foreach ($articles as $article) {
  echo $article, ", ";
}