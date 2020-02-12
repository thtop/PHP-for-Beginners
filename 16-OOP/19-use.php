<?php

require '17-overriding.php';
require '18-overriding.php';

$book = new Book();
$book->name = 'The 100';
$book->author = 'Commander Laxa';

echo $book->getListingDescription();