<?php

$articles = [
  "First post",
  "Another post",
  "Read this!"
];

foreach ($articles as $index => $article) {
  echo "{$index} - {$article}, ";
}

//

$articles2 = [
  "a" => "First post",
  "b" => "Another post",
  "c" => "Read this!"
];

foreach ($articles2 as $index => $article) {
  echo "{$index} - {$article}, ";
}