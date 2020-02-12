<?php

class Item
{
  public $name;
  public $description;
  public static $count = 0;

  public function __construct($name, $description) {
    $this->name = $name;
    $this->description = $description;

    static::$count++;
  }

  public static function showCount() {
    echo static::$count;
  }

}