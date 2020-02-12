<?php

require '05-visibility.php';

$item = new Item('PHP OOP', 'A big book');

// $item->name = 'OOP';
$item->getName();

var_dump($item);