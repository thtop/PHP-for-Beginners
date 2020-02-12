<?php

class Item
{
  public $name;

  protected $code = 1234;

  public function getListingDescription() {
    return "Item: $this->name";
  }
}