<?php

$alice = [
  "name"    => "Alice",
  "email"   => "alice@example.com",
  "height"  => 1.80
];

$bob = [
  "name"    => "bob",
  "email"   => "bob@example.com",
  "height"  => 1.67
];

$carol = [
  "name"    => "carol",
  "email"   => "carol@example.com",
  "height"  => 1.74
];

$people1 = [ $alice, $bob, $carol];
var_dump($people1);

// 

$people2 = [
  [ "name" => "Alice", "email" => "alice@example.com", "height" => 1.80 ],
  [ "name" => "bob", "email"   => "bob@example.com", "height" => 1.67],
  [ "name" => "carol", "email" => "carol@example.com", "height" => 1.74]
];

var_dump($people2);
$alice_email = $people2[0]["email"];
var_dump($alice_email);

//

$articles = [
  ["title" => "First post", "content" => "This is the first post"],
  ["title" => "Another post", "content" => "Another post to read here"],
  ["title" => "Read this!", "content" => "You must read this article!"]
];

var_dump($articles[1]["title"]);