## Coding Exercise 2: Arrays

### Arrays

Create variable called _array_ that contains an array with three simple values. These values can be whatever you like.

Explicitly assign the index of "three" to the third element.

Write a `foreach` loop that contains the following statement to print out each element of the array, along with its index: `echo "$index = $value.";`

arrays.php

```php
<?php

$array = [
    "one" => "Commander Lexa",
    "two" => "Clark",
    "three" => "Lena Luthor"
];

foreach ($array as $index => $value) {
    echo "$index = $value.";
}
```
