## Coding Exercise 1: Variables and Operators

### Variables and Operators

Over to you! In this exercise you're going to create (declare) five variables, and assign a value to each one. 

Declare the following variables, Don't forget to end each line with a semicolon!

- A variable called `name`, with a string value, for example, your name.
- A variable called `age`, with an integer value.
- A variable called `status` with a boolean value.
- A variable called `new_age`, that contains the result of adding 10 to the contents of the `age` variable above.
- A variable called `sentence`, that contains the contents of the `name` variable above, with the following string appended to the end: "knows PHP!". You can concatenate the two strings together, or use variable interpolation.


variable.php
```php
<?php

$name = "Thamonwan";
$age = 32;
$status = true;
$new_age = $age + 10;
$sentence = $name . " knows PHP!";
```