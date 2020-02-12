<?php

require '20-Item.php';
require '21-Book.php';

$item = new Item();

// echo $item->code; // Fatal error: Uncaught Error: Cannot access protected property Item::$code i

$book = new Book();
echo $book->getCode();