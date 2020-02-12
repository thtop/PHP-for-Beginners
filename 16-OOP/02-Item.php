<?php

require '01-oo.php';

$my_item = new Item();

$my_item->name = 'Example';
$my_item->description = 'A new description';
$my_item->price = 2.99;

var_dump($my_item);