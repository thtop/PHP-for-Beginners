<?php
class User {
  public function showMessage() {
      echo "Hello";
  }
}

class Administrator extends User {
  public function showMessage() {
      echo "Hi there";
  }
}

$person = new Administrator();

echo $person->showMessage();