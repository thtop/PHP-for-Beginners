<?php

class Item
{
  public $name;
  public $description = 'This is the default';

  function __construct($name, $description) {
    $this->name = $name;
    $this->description = $description;
  }

  function sayHello() {
    echo "Hello";
  }

  function getName(){
    return $this->name;
  }

}
