# An Introduction to Object-Oriented PHP

## Classes and Objects

Object-oriented programming

- [PHP-FIG](https://www.php-fig.org/)

---

## Object Attributes: Adding Properties to a Class

Class

```php
<?php

class Item
{
  public $name;
  public $description = 'This is the default';

}

```

Object

```php
<?php

require '01-oo.php';

$my_item = new Item();

$my_item->name = 'Example';
$my_item->description = 'A new description';
$my_item->price = 2.99;

var_dump($my_item);
```

Output:

```html
object(Item)#1 (3) {
  ["name"]=>
  string(7) "Example"
  ["description"]=>
  string(17) "A new description"
  ["price"]=>
  float(2.99)
}
```

---

## Object Functions: Adding Methods to a class

- [PSR-1: Basic Coding Standard](php-fig.org/psr/psr-1/)

Class:

```php
<?php

class Item
{
  public $name;
  public $description = 'This is the default';

  function sayHello() {
    echo "Hello";
  }

  function getName(){
    return $this->name;
  }

}

```

Objec:

```php
<?php

require '01-oo.php';

$item1 = new Item();
$item1->name = 'Lexa';
echo $item1->getName();

$item2 = new Item();
$item2->name = 'Clarke';
echo $item2->getName();

```

Output:

```html
LexaClarke
}
```

---

## Object Initialisation: the Constructor Method

Class:

```php
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
```

Object:

```php
<?php

require '01-oo.php';

$item1 = new Item('PHP OOP', 'A big item');
var_dump($item1);

```

Output:

```html
object(Item)#1 (2) {
  ["name"]=>
  string(7) "PHP OOP"
  ["description"]=>
  string(10) "A big item"
}
```

---


## Control Access: Public and Private visibility of Properties and Methods

Class:

```php
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

```

Object:

```php
<?php

require '05-visibility.php';

$item = new Item('PHP OOP', 'A big book');

// $item->name = 'OOP';
$item->getName();

var_dump($item);
```

---

## Public Properies vs Getter and Setter Methods

- [PHP Magic Methods](https://culttt.com/2014/04/16/php-magic-methods/)

Class:

```php
<?php

class Item
{
  private $name;
  private $description;

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }
}

```

Object:

```php
<?php

require '07-get-set.php';

$item = new Item('PHP OOP', 'A big book');

// $item->name = "Example";
// $item->description = "The example description";

$item->setName('Lexa');
echo $item->getName();

// var_dump($item);
```

---

## Static Properties and Methods

Class:

```php
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
```

Use:

```php
<?php

require '09-static.php';

$item = new Item('Huge', 'A big item');
$item2 = new Item('Huge 2', 'A big item 2');

Item::$count;
Item::showCount();

// var_dump(Item::$count);
// $item = new Item('Huge', 'A big item');
// var_dump(Item::$count);
// $item2 = new Item('Huge 2', 'A big item 2');
// var_dump(Item::$count);

```

---

## Constants: Using Define and const to Create Constant Values

- `define('MAXIMUM', 100)` = global
- databaes, config
- [define](https://www.php.net/manual/en/function.define.php)
- [Class Constants](https://www.php.net/manual/en/language.oop5.constants.php#language.oop5.constants)
- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)

Class: 

```php
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
```

Use:

```php
<?php

require '12-const.php';

echo Item::MAX_LENGTH; // = static
```

  
---

## Inheritance: Usng the Extends Keyword to reuse Code and reduce Repetition

Parent class:

```php
<?php

class Item
{
  public $name;

  public function getLIstingDescription()
  {
    return $this->name;
  }
}
```

Child class:

```php
<?php

class Book extends Item
{
  // public $name;
  public $author;

  // public function getLIstingDescription()
  // {
  //   return $this->name;
  // }
}
```

Use:

```php
<?php

require '14-inheritance.php';
require '15-Book.php';

$item = new Item();
$item->name = 'TV';
echo $item->getListingDescription();

echo "<br />";

$book = new Book();
$book->name = 'Hamlet';
$book->author = 'Shakespeare';
echo $book->getListingDescription();

```

---

## Overriding Methods and Using the Parent Keyword to Call the Parent Class Code

Parent class:

```php
<?php

class Item
{
  public $name;

  public function getListingDescription() {
    return "Item: $this->name";
  }
}
```

Child class:

```php
<?php

class Book extends Item
{
  public $author;

  // public function getListingDescription() {
  //   return "$this->name by $this->author";
  // }

  public function getListingDescription() {
    return parent::getListingDescription() . " by $this->author";
  }
}
```

Use:

```php
<?php

require '17-overriding.php';
require '18-overriding.php';

$book = new Book();
$book->name = 'The 100';
$book->author = 'Commander Laxa';

echo $book->getListingDescription();

```

---

## Control Access: Protected Visibility of Properties and Methods

- [Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)

| Visibility | Availability                                        |
| ---------- | --------------------------------------------------- |
| public     | Anywhere: Inside other classes and object instances |
| private    | Inside the current clss only                        |
| protected  | Inside the current class and any subclasses         |

Parent class:

```php
<?php

class Item
{
  public $name;

  protected $code = 1234;

  public function getListingDescription() {
    return "Item: $this->name";
  }
}
```

Child clss:

```php
<?php

class Book extends Item
{
  public $author;

  public function getListingDescription() {
    return parent::getListingDescription() . " by $this->author";
  }

  public function getCode()
  {
    return $this->code;
  }
}
```

Use:

```php
<?php

require '20-Item.php';
require '21-Book.php';

$item = new Item();

// echo $item->code; // Fatal error: Uncaught Error: Cannot access protected property Item::$code i

$book = new Book();
echo $book->getCode();
```