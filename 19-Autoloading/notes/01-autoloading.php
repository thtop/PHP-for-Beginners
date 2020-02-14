<?php

spl_autoload_register(function ($class) {
  // echo $class;
  require "../classes/{$class}.php";
});

// require '../classes/Article.php';

$article = new Article();

var_dump($article);
