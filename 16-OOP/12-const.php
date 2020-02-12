<?php

class Item
{

  public CONST MAX_LENGTH = 24;

  public $name;
  public $description;

  public function __construct($name, $description) {
    $this->name = $name;
    $this->description = $description;

  }

}