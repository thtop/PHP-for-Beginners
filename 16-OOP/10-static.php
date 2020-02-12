<?php

require '09-static.php';

$item = new Item('Huge', 'A big item');
$item2 = new Item('Huge 2', 'A big item 2');

Item::$count;
Item::showCount();

// var_dump(Item::$count);
// $item = new Item('Huge', 'A big item');
// var_dump(Item::$count);
// $item2 = new Item('Huge 2', 'A big item 2');
// var_dump(Item::$count);

