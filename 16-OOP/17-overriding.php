<?php

class Item
{
  public $name;

  public function getListingDescription() {
    return "Item: $this->name";
  }
}