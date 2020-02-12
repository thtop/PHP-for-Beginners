<?php

class Item
{
  private $name;
  public $description = 'This is the default';

  public function __construct($name, $description) {
    $this->name = $name;
    $this->description = $description;
  }

  public function sayHello() {
    echo "Hello";
  }

  private function getName(){
    return $this->name;
  }

}
