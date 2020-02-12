<?php

require '14-inheritance.php';
require '15-Book.php';

$item = new Item();
$item->name = 'TV';
echo $item->getListingDescription();

echo "<br />";

$book = new Book();
$book->name = 'Hamlet';
$book->author = 'Shakespeare';
echo $book->getListingDescription();
