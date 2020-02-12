<?php

require '07-get-set.php';

$item = new Item('PHP OOP', 'A big book');

// $item->name = "Example";
// $item->description = "The example description";

$item->setName('Lexa');
echo $item->getName();

// var_dump($item);