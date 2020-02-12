# Coding Exercise 12

## Object-Oriented PHP

1. In the class.php file, define a class called `Person` that has the following characteristics:
   - two public properties, `name` and `surname`
   - a public method `getFullName`, that returns a string consisting of the name prpperty, followed by a space, then the surname property.

class.php

```php
<?php

class Person
{
    public $name;
    public $surname;
    
    public function getFullName()
    {
        return "$this->name $this->surname";
    }
}
```
